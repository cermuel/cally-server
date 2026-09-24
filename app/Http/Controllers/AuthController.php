<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Support\EmailTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Resend\Laravel\Facades\Resend;

class AuthController extends Controller
{
    protected function resendVerifyEmail(User $user)
    {

        $emailToken = Str::random(12);
        $emailTokenHashed = Hash::make($emailToken);
        $emailExpiresAt = now()->addHour();
        $frontendUrl = config('services.frontend_url');
        $verifyUrl = $frontendUrl . '/auth/verify-email?token=' . $emailToken . '&email=' . $user->email;

        if ($user->email_verified_at !== null) return;
        $user->update(['email_token' => $emailTokenHashed, 'email_token_expires_at' => $emailExpiresAt]);
        Resend::emails()->send([
            'from' => 'Cally <cally@cermuel.dev>',
            'to' => [$user->email],
            'subject' => 'You are one step away',
            'html' => EmailTemplate::verifyEmail(
                verifyUrl: $verifyUrl,
                expiresIn: 'one hour',
            ),
        ]);
    }

    public function login(Request $request)
    {
        $body = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]
        );
        $body['email'] = strtolower($body['email']);
        $user = User::where('email', $body['email'])->first();

        if (! $user || ! Hash::check($body['password'], $user->password)) {
            return response()->json(['message' => 'Invalid email or password'], 400);
        }

        if ($user->email_verified_at == null) {
            $this->resendVerifyEmail($user);

            return response()->json(['message' => 'Email sent successfully', 'user' => new UserResource($user)], 200);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['message' => 'Login successful', 'user' => new UserResource($user), 'token' => $token]);
    }

    public function register(AuthRequest $request)
    {
        $body = $request->validated();

        $body['password'] = Hash::make($body['password']);
        $body['email'] = strtolower($body['email']);

        $user = User::create($body);

        if ($user) {
            $this->resendVerifyEmail($user);
        }

        return response()->json(['message' => 'Email sent successfully', 'user' => new UserResource($user)], 201);
    }

    public function resendEmail(Request $request)
    {
        $body = $request->all();

        $body['email'] = strtolower($body['email']);

        $user = User::where('email', $body['email'])->first();

        if ($user) {
            $this->resendVerifyEmail($user);
        }

        return response()->json(['message' => 'Email sent successfully', 'user' => new UserResource($user)], 200);
    }

    public function verifyEmail(Request $request)
    {
        $body = $request->all();

        $body['email'] = strtolower($body['email']);

        $user = User::where('email', $body['email'])->first();

        if (! $user || ! $user->email_token || ! $user->email_token_expires_at || now()->greaterThan($user->email_token_expires_at) || ! Hash::check($body['token'], $user->email_token)) {
            return response()->json(['message' => 'Invalid or expired token'], 400);
        }

        $user->update(['email_verified_at' => now(), 'email_token' => null, 'email_token_expires_at' => null]);
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['message' => 'Email verified successfully', 'token' => $token, 'user' => new UserResource($user)], 201);
    }

    public function forgotPassword(Request $request)
    {
        $body = $request->validate(
            [
                'email' => ['required', 'email'],
            ]
        );
        $body['email'] = strtolower($body['email']);
        $user = User::where('email', $body['email'])->first();

        if ($user) {
            $resetPasswordToken = Str::random(12);
            $resetPasswordTokenHashed = Hash::make($resetPasswordToken);
            $resetPasswordExpiresAt = now()->addHour();
            $frontendUrl = config('services.frontend_url');
            $resetPasswordUrl = $frontendUrl . '/auth/reset-password?token=' . $resetPasswordToken . '&email=' . $user->email;

            $user->update(['reset_password_token' => $resetPasswordTokenHashed, 'reset_password_token_expires_at' => $resetPasswordExpiresAt]);

            Resend::emails()->send([
                'from' => 'Cally <cally@cermuel.dev>',
                'to' => [$user->email],
                'subject' => 'Reset password',
                'html' => EmailTemplate::resetPassword(
                    name: $user->name,
                    resetUrl: $resetPasswordUrl,
                    expiresIn: 'one hour',
                ),
            ]);
        }

        return response()->json(['message' => 'Reset email sent successfully']);
    }

    public function resetPassword(Request $request)
    {
        $body = $request->validate(
            [
                'email' => ['email', 'required'],
                'password' => ['required', 'min:4', 'confirmed'],
                'token' => ['string', 'required'],
            ]
        );
        $user = User::where('email', $body['email'])->first();

        if (! $user || ! $user->reset_password_token || ! $user->reset_password_token_expires_at || now()->greaterThan($user->reset_password_token_expires_at) || ! Hash::check($body['token'], $user->reset_password_token)) {
            return response()->json(['message' => 'Invalid or expired token'], 400);
        }

        $user->update(['password' => Hash::make($body['password']), 'reset_password_token' => null, 'reset_password_token_expires_at' => null]);

        return response()->json(['message' => 'Reset email sent successfully']);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response(['message' => 'Logout successful']);
    }
}
