<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamInviteRequest;
use App\Http\Resources\TeamInviteResource;
use App\Jobs\SendTeamInviteEmailJob;
use App\Models\Team;
use App\Models\TeamInvite;
use App\Models\User;
use App\TeamRole;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TeamInviteController extends Controller
{
    public function getInvite(Request $request): JsonResponse
    {
        $params = $request->validate([
            'email' => ['required', 'email'],
            'token' => ['required', 'string'],
            'id' => ['required', 'integer'],
        ]);

        $invite = TeamInvite::with('team')->where('id', $params['id'])->where('email', $params['email'])
            ->whereNull('accepted_at')->whereNull('declined_at')->first();

        if (! $invite || now()->greaterThan($invite?->expires_at) || ! Hash::check($params['token'], $invite?->token_hash)) {
            abort(404, 'Invalid or expired invite');
        }

        return response()->json(['message' => 'Invite fetched successfully', 'invite' => new TeamInviteResource($invite)]);
    }

    public function acceptInvite(Request $request, string $id): JsonResponse
    {
        $user = $request->user();

        $body = $request->validate([
            'token' => ['required', 'string'],
        ]);

        DB::transaction(function () use ($id, $user, $body) {
            $invite = TeamInvite::whereKey($id)
                ->lockForUpdate()
                ->firstOrFail();

            if (
                $invite->accepted_at ||
                $invite->declined_at ||
                ! $invite->expires_at ||
                $invite->expires_at->isPast() ||
                ! $invite->token_hash ||
                ! Hash::check($body['token'], $invite->token_hash)
            ) {
                abort(404, 'Invalid or expired invite');
            }

            if (strcasecmp($invite->email, $user->email) !== 0) {
                abort(403, 'This invitation does not belong to you');
            }

            $team = Team::findOrFail($invite->team_id);

            if ($team->members()->where('user_id', $user->id)->exists()) {
                abort(409, 'User is already a team member');
            }

            $team->members()->create([
                'user_id' => $user->id,
                'role' => $invite->role,
            ]);

            $invite->update([
                'accepted_at' => now(),
            ]);
        }, 3);

        return response()->json([
            'message' => 'Invite accepted successfully',
        ]);
    }

    public function index(Request $request, Team $team): JsonResponse
    {
        $this->authorizeInviteManagement($request->user(), $team);

        $invites = $team->invites()->latest()->paginate();

        return response()->json([
            'message' => 'Team invites fetched successfully',
            'invites' => TeamInviteResource::collection($invites->items()),
            'pagination' => [
                'current_page' => $invites->currentPage(),
                'per_page' => $invites->perPage(),
                'total' => $invites->total(),
                'last_page' => $invites->lastPage(),
                'from' => $invites->firstItem(),
                'to' => $invites->lastItem(),
                'previous_page_url' => $invites->previousPageUrl(),
                'next_page_url' => $invites->nextPageUrl(),
            ],
        ]);
    }

    public function store(TeamInviteRequest $request, Team $team): JsonResponse
    {
        $body = $request->validated();
        $user = $request->user();

        $this->authorizeInviteManagement($user, $team);

        $frontendUrl = rtrim((string) config('services.frontend_url'), '/');
        $inviterName = filled($user->name) ? trim($user->name) : $user->email;

        [$createdInvites, $jobs] = DB::transaction(function () use ($body, $team, $frontendUrl, $inviterName) {
            $createdInvites = collect();
            $jobs = [];

            foreach ($body['users'] as $guest) {
                $email = $guest['email'];

                $userExists = $team->members()
                    ->whereHas('user', function ($query) use ($email) {
                        $query->where('email', $email);
                    })
                    ->exists();

                if ($userExists) abort(409, "{$email} is already a member of this team");

                $inviteExists = $team->invites()
                    ->where('email', $email)
                    ->whereNull('accepted_at')
                    ->where('expires_at', '>', now())
                    ->exists();

                if ($inviteExists)  abort(409, "An active invitation already exists for {$email}");

                $token = Str::random(64);

                $invite = $team->invites()->create([
                    ...$guest,
                    'token_hash' => Hash::make($token),
                    'expires_at' => now()->addDays(7),
                ]);

                $query = http_build_query([
                    'token' => $token,
                    'email' => $email,
                    'id' => $invite->id,
                ], '', '&', PHP_QUERY_RFC3986);

                $inviteUrl = $frontendUrl . '/team/invite?' . $query;

                $jobs[] = new SendTeamInviteEmailJob(
                    $email,
                    $inviterName,
                    $team->name,
                    $inviteUrl,
                    '7 days'
                );

                $createdInvites->push($invite);
            }

            return [$createdInvites, $jobs];
        }, 3);

        $batch = Bus::batch($jobs)
            ->name("team-{$team->id}-invites")
            ->onQueue('email')
            ->dispatch();

        return response()->json([
            'message' => 'Invitations created successfully',
            'invites' => TeamInviteResource::collection($createdInvites),
            'batch_id' => $batch->id,
        ], 201);
    }
    public function update(TeamInviteRequest $request, Team $team, TeamInvite $invite): JsonResponse
    {
        $this->authorizeInviteManagement($request->user(), $team);
        abort_unless($invite->team_id === $team->id, 404, 'Invite not found.');

        $invite->update($request->validated());

        return response()->json(['message' => 'Invite updated successfully', 'invite' => new TeamInviteResource($invite)]);
    }

    public function destroy(Request $request, Team $team, TeamInvite $invite): JsonResponse
    {
        $this->authorizeInviteManagement($request->user(), $team);
        abort_unless($invite->team_id === $team->id, 404, 'Invite not found.');

        $invite->delete();

        return response()->json(['message' => 'Invite deleted successfully']);
    }

    private function authorizeInviteManagement(User $user, Team $team): void
    {
        $canAccessTeam = $team->owner_id === $user->id
            || $team->members()->whereBelongsTo($user)->exists();

        abort_unless($canAccessTeam, 404, 'Team not found.');

        $canManageInvites = $team->owner_id === $user->id
            || $team->members()
            ->whereBelongsTo($user)
            ->where('role', TeamRole::Admin->value)
            ->exists();

        abort_unless($canManageInvites, 403, 'You do not have permission to manage team invites.');
    }
}
