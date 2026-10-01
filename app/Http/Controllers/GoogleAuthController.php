<?php

namespace App\Http\Controllers;

use App\Models\Connection;
use App\Models\User;
use Google\Client as GoogleClient;
use Google\Service\Oauth2;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GoogleAuthController extends Controller
{
    private function client(): GoogleClient
    {
        $client = new GoogleClient();

        $client->setClientId(config('services.google.client_id'));
        $client->setClientSecret(config('services.google.client_secret'));
        $client->setRedirectUri(config('services.google.redirect'));

        return $client;
    }

    private function setGoogleScopes(GoogleClient $client): void
    {
        $client->setScopes([
            'openid',
            'email',
            'profile',
            'https://www.googleapis.com/auth/calendar.events',
        ]);

        $client->setAccessType('offline');
        $client->setPrompt('consent');
    }

    public function redirect(Request $request)
    {
        $client = $this->client();

        $this->setGoogleScopes($client);

        $client->setState(encrypt([
            'type' => 'auth',
        ]));

        return response()->json([
            'url' => $client->createAuthUrl(),
        ]);
    }

    public function connectionRedirect(Request $request)
    {
        $client = $this->client();

        $this->setGoogleScopes($client);

        $client->setState(encrypt([
            'type' => 'connection',
            'user_id' => $request->user()->id,
        ]));

        return response()->json([
            'url' => $client->createAuthUrl(),
        ]);
    }

    public function callback(Request $request)
    {
        $client = $this->client();

        $token = $client->fetchAccessTokenWithAuthCode($request->code);

        if (isset($token['error'])) {
            return response()->json([
                'message' => 'Google connection failed',
                'error' => $token,
            ], 422);
        }

        $client->setAccessToken($token);

        $googleUser = (new Oauth2($client))->userinfo->get();

        $state = $request->state ? decrypt($request->state) : ['type' => 'auth'];

        if (($state['type'] ?? 'auth') === 'connection') {
            $user = User::findOrFail($state['user_id']);

            $this->saveConnection($user, $googleUser, $token);

            return redirect(config('app.frontend_url') . '/settings/integrations?google=connected');
        }

        $user = User::firstOrCreate(
            ['email' => $googleUser->email],
            [
                'name' => $googleUser->name,
                'password' => bcrypt(Str::random(32)),
            ]
        );

        if (!$user->avatar_url) {
            $user->avatar_url = $googleUser->picture;
        }

        if (!$user->email_verified_at) {
            $user->email_verified_at = now();
        }

        $user->save();

        $this->saveConnection($user, $googleUser, $token);

        $appToken = $user->createToken('google-login')->plainTextToken;

        return redirect(config('app.frontend_url') . '/auth/callback?token=' . $appToken);
    }

    private function saveConnection(User $user, $googleUser, array $token): void
    {
        $existingConnection = Connection::where('user_id', $user->id)
            ->where('provider', 'google')
            ->first();

        Connection::updateOrCreate(
            [
                'user_id' => $user->id,
                'provider' => 'google',
            ],
            [
                'provider_account_id' => $googleUser->id,
                'email' => $googleUser->email,
                'access_token' => $token['access_token'],
                'refresh_token' => $token['refresh_token'] ?? $existingConnection?->refresh_token,
                'token_expires_at' => now()->addSeconds($token['expires_in']),
                'calendar_id' => 'primary',
                'scopes' => explode(' ', $token['scope'] ?? ''),
            ]
        );
    }
}
