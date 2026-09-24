<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvailabilityRequest;
use App\Models\Availability;
use Illuminate\Http\Request;

class AvailabilityController extends Controller
{

    public function index(Request $request)
    {
        $availabilities = Availability::where('user_id', $request->user()->id)->all();

        return response()->json(['message' => 'Availabilities fetched successfully', 'availabilities' => $availabilities]);
    }

    public function store(AvailabilityRequest $request)
    {
        $body = $request->validated();

        $user = $request->user();

        $count = Availability::where('day', $body['day'])->count();

        if ($count >= 4) {
            return response()->json(['message' => 'Max time schedule reached for ' . $body['day']]);
        }

        $availability = $user->availabilities()->create($body);

        return response()->json(['message' => 'Availabilitiy created successfully', 'availability' => $availability]);
    }


    public function update(AvailabilityRequest $request, string $id)
    {
        $body = $request->validated();

        $availability = Availability::where('id', $id)->first();

        $availability->update($body);

        return response()->json(['message' => 'Availabilitiy updated successfully', 'availability' => $availability]);
    }


    public function destroy(string $id)
    {
        $availability = Availability::where('id', $id)->first();

        $availability->delete();

        return response()->json(['message' => 'Availabilitiy delered successfully']);
    }
}
