<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class LinkController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        $links = Event::where('user_id', $user->id)->latest()->where('is_profile', true)->filter(request(['search']))->get();

        return response()->json(['links' => $links, 'message' => 'Links fetched successfully']);
    }

    public function store(EventRequest $request)
    {
        $body = $request->validated();
        $user = $request->user();

        $body['is_profile'] = true;

        $link = $user->events()->create($body);

        Cache::delete("public-profile-{$user->username}-events");


        return response()->json(['link' => $link, 'message' => 'Link created successfully'], 201);
    }

    public function show(string $id)
    {
        $link = Event::where('id', $id)->where('is_profile', true)->first();

        if (! $link) {
            return response()->json(['message' => 'Link not found'], 404);
        }

        return response()->json(['link' => $link, 'message' => 'Link updated successfully']);
    }

    public function update(EventRequest $request, string $id)
    {
        $body = $request->validated();
        $user = $request->user();

        $link = Event::where('id', $id)->where('is_profile', true)->first();

        if (! $link) {
            return response()->json(['message' => 'Link not found'], 404);
        }

        $link->update($body);

        Cache::forget("public-profile-{$user->username}-events");

        return response()->json(['link' => $link, 'message' => 'Link updated successfully']);
    }

    public function destroy(string $id)
    {
        $link = Event::where('id', $id)->with('user')->where('is_profile', true)->first();

        if (! $link) {
            return response()->json(['message' => 'Link deleted successfully']);
        }
        $link->forceDelete();

        Cache::forget("public-profile-{$link->user->username}-events");

        return response()->json(['message' => 'Link deleted successfully']);
    }
}
