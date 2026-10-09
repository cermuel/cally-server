<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamMemberRequest;
use App\Http\Resources\TeamMemberResource;
use App\Models\Team;
use App\Models\TeamMember;
use App\Models\User;
use App\TeamRole;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index(Request $request, Team $team): JsonResponse
    {
        $this->authorizeTeamAccess($request->user(), $team);

        $members = $team->members()
            ->with('user')
            ->latest()
            ->paginate();

        return response()->json([
            'message' => 'Team members fetched successfully',
            'members' => TeamMemberResource::collection($members->items()),
            'pagination' => [
                'current_page' => $members->currentPage(),
                'per_page' => $members->perPage(),
                'total' => $members->total(),
                'last_page' => $members->lastPage(),
                'from' => $members->firstItem(),
                'to' => $members->lastItem(),
                'previous_page_url' => $members->previousPageUrl(),
                'next_page_url' => $members->nextPageUrl(),
            ],
        ]);
    }

    public function update(TeamMemberRequest $request, Team $team, TeamMember $member): JsonResponse
    {
        $this->authorizeMemberManagement($request->user(), $team, $member);

        abort_if(
            $member->user_id === $team->owner_id,
            403,
            'The team owner role cannot be changed.',
        );

        $member->update($request->validated());

        return response()->json([
            'message' => 'Team member updated successfully',
            'member' => new TeamMemberResource($member->refresh()->load('user')),
        ]);
    }

    public function destroy(Request $request, Team $team, TeamMember $member): JsonResponse
    {
        $this->authorizeMemberManagement($request->user(), $team, $member);

        abort_if(
            $member->user_id === $team->owner_id,
            403,
            'The team owner cannot be removed.',
        );

        $member->delete();

        return response()->json([
            'message' => 'Team member removed successfully',
        ]);
    }

    public function leave(Request $request, Team $team): JsonResponse
    {
        $user = $request->user();

        abort_if(
            $team->owner_id === $user->id,
            403,
            'The team owner cannot leave the team.',
        );

        $membership = $team->members()
            ->whereBelongsTo($user)
            ->first();

        abort_unless($membership, 404, 'Team membership not found.');

        $membership->delete();

        return response()->json([
            'message' => 'You have left the team successfully',
        ]);
    }

    private function authorizeTeamAccess(User $user, Team $team): void
    {
        $canAccessTeam = $team->owner_id === $user->id
            || $team->members()->whereBelongsTo($user)->exists();

        abort_unless($canAccessTeam, 404, 'Team not found.');
    }

    private function authorizeMemberManagement(User $user, Team $team, TeamMember $member): void
    {
        abort_unless($member->team_id === $team->id, 404, 'Team member not found.');

        $canManageMembers = $team->owner_id === $user->id
            || $team->members()
                ->whereBelongsTo($user)
                ->where('role', TeamRole::Admin->value)
                ->exists();

        abort_unless($canManageMembers, 403, 'You do not have permission to manage team members.');
    }
}
