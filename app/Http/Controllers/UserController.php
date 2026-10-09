<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected array $meetings = [
        [
            'name' => '15 min meeting',
            'slug' => '15min',
            'description' => 'A quick chat for introductions, simple questions, or a brief check-in.',
            'duration_minutes' => 15,
            'first_reminder' => 180,
            'second_reminder' => 30,
            'is_active' => true,
            'is_profile' => true,
            'pre_meeting_minutes' => 5,
            'post_meeting_minutes' => 5,
            'color' => '#fff09a',
        ],
        [
            'name' => '30 min meeting',
            'slug' => '30min',
            'description' => 'More time to discuss an idea, work through a question, or plan next steps.',
            'duration_minutes' => 30,
            'first_reminder' => 180,
            'second_reminder' => 30,
            'is_active' => true,
            'is_profile' => true,
            'pre_meeting_minutes' => 5,
            'post_meeting_minutes' => 5,
            'color' => '#c0a8ff',
        ],
        [
            'name' => 'Private meeting',
            'slug' => 'private',
            'description' => 'A one-on-one meeting for conversations that need a little privacy. Please share a brief reason for booking so I can prepare.',
            'duration_minutes' => 30,
            'first_reminder' => 180,
            'second_reminder' => 30,
            'is_active' => true,
            'is_profile' => false,
            'pre_meeting_minutes' => 5,
            'post_meeting_minutes' => 5,
            'color' => '#cdd2dc',
        ],
    ];

    public function profile(Request $request)
    {
        return response()->json([
            'message' => 'Profile fetched successfully',
            'user' => new UserResource(($request->user())),
        ]);
    }

    public function checkUsername(Request $request)
    {
        $body = $request->all();

        $usernameExists = User::where('username', $body['username'])->first();

        if ($usernameExists || $body['username'] == 'privacy' || $body['username'] == 'terms') {
            return response()->json([
                'message' => 'This username is already taken.',
                'username' => $body['username'],
            ], 400);
        }

        return response()->json([
            'message' => 'Username available',
            'username' => $body['username'],
        ]);
    }

    public function update(UserRequest $request)
    {
        $user = $request->user();
        $validated = $request->validated();

        if (isset($validated['notification_preference'])) {
            $validated['notification_preference'] = array_replace_recursive(
                $user->notification_preference ?? [],
                $validated['notification_preference'],
            );
        }

        $user->update($validated);

        Cache::forget("public-profile-{$user->username}");
        Cache::forget("public-profile-username-{$user->username}");

        return response()->json([
            'message' => 'Profile updated successfully',
            'user' => new UserResource(($user)),
            'validated' => $validated,
        ]);
    }

    public function completeOnboarding(Request $request)
    {
        $user = $request->user();
        if ($user->onboarding_completed_at) {
            return response()->json([
                'message' => 'Onboarding completed successfully',
                'user' => new UserResource(($request->user())),
            ]);
        }

        DB::transaction(function () use ($user) {
            foreach ($this->meetings as $key => $meeting) {
                $user->events()->create($meeting);
            }
            $user->update([
                'onboarding_completed_at' => now(),
            ]);
        });

        return response()->json([
            'message' => 'Onboarding completed successfully',
            'user' => new UserResource(($request->user())),
        ]);
    }

    public function changePassword(UserRequest $request)
    {
        $body = $request->validate([
            'old_password' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);

        $user = $request->user();
        if (! Hash::check($body['old_password'], $user->password)) {
            return response()->json(['message' => 'Invalid old password'], 400);
        }
        $user->update(['password' => $body['password']]);

        Cache::forget("public-profile-{$user->username}");
        Cache::forget("public-profile-username-{$user->username}");

        return response()->json([
            'message' => 'Profile updated successfully',
            'user' => new UserResource(($request->user())),
        ]);
    }
}
