<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Http\Resources\TeamResource;
use App\Models\Team;
use App\TeamRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $teams = Team::with(['owner', 'members.user'])
            ->where(function ($query) use ($user) {
                $query->where('owner_id', $user->id)
                    ->orWhereHas('members', function ($q) use ($user) {
                        $q->where('user_id', $user->id);
                    });
            })->latest()->paginate();

        return response()->json([
            'message' => 'Teams fetched successfully',
            'teams' => TeamResource::collection($teams->items()),
            'pagination' => [
                'current_page' => $teams->currentPage(),
                'per_page' => $teams->perPage(),
                'total' => $teams->total(),
                'last_page' => $teams->lastPage(),
                'from' => $teams->firstItem(),
                'to' => $teams->lastItem(),
                'previous_page_url' => $teams->previousPageUrl(),
                'next_page_url' => $teams->nextPageUrl(),
            ],
        ]);
    }

    public function store(TeamRequest $request)
    {
        $body = $request->validated();
        $user = $request->user();

        $team = DB::transaction(function () use ($body, $user) {
            $team = $user->teams()->create($body);
            $team->members()->create([
                'user_id' => $user->id,
                'role' => TeamRole::Admin,
            ]);

            return $team;
        }, 3);

        $team->load(['owner']);

        return response()->json([
            'message' => 'Team created successfully',
            'team' => new TeamResource($team),
        ], 201);
    }

    public function show(Request $request, string $id)
    {
        $user = $request->user();
        $team = Team::with(['owner', 'members.user'])->where('id', $id)
            ->where(function ($query) use ($user) {
                $query->where('owner_id', $user->id)
                    ->orWhereHas('members', function ($q) use ($user) {
                        $q->where('user_id', $user->id);
                    });
            })->first();

        if (! $team) {
            return response()->json(['message' => 'Team not found'], 404);
        }

        return response()->json([
            'message' => 'Team fetched successfully',
            'team' => new TeamResource($team),
        ]);
    }

    public function update(TeamRequest $request, string $id)
    {
        $user = $request->user();
        $body = $request->validated();

        $team = Team::with(['owner', 'members.user'])
            ->where('id', $id)
            ->where(function ($query) use ($user) {
                $query->where('owner_id', $user->id)
                    ->orWhereHas('members', function ($q) use ($user) {
                        $q->where('user_id', $user->id);
                    });
            })
            ->first();

        if (! $team) {
            return response()->json([
                'message' => 'Team not found',
            ], 404);
        }

        $isOwner = (int) $team->owner_id === (int) $user->id;
        $isAdmin = $team->members()
            ->where('user_id', $user->id)
            ->where('role', TeamRole::Admin->value)
            ->exists();

        if (! $isAdmin && ! $isOwner) {
            return response()->json([
                'message' => 'You do not have permission to update this team.',
            ], 403);
        }

        $team->update($body);

        return response()->json([
            'message' => 'Team updated successfully',
            'team' => new TeamResource(
                $team->refresh()->load(['owner', 'members.user'])
            ),
        ]);
    }

    public function destroy(Request $request, string $id)
    {
        $user = $request->user();
        $team = Team::with(['owner', 'members.user'])
            ->where('id', $id)
            ->where(function ($query) use ($user) {
                $query->where('owner_id', $user->id)
                    ->orWhereHas('members', function ($q) use ($user) {
                        $q->where('user_id', $user->id);
                    });
            })
            ->first();

        if (! $team) {
            return response()->json([
                'message' => 'Team not found',
            ], 404);
        }

        $isOwner = $team->owner_id === $user->id;

        if (! $isOwner) {
            return response()->json([
                'message' => 'You do not have permission to delete this team.',
            ], 403);
        }

        $team->delete();

        return response()->json(['message' => 'Team deleted successfully']);
    }
}
