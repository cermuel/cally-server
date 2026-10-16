<?php

namespace App\Http\Controllers;

use App\Models\Reschedule;
use Illuminate\Http\Request;

class RescheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $booking_id = $request['booking_id'];

        $reschedules = Reschedule::where('booking_id', $booking_id)->get();

        return response()->json(['message' => 'Reschedules fetched successfully', 'reschedules' => $reschedules]);
    }


    public function store(Request $request) {}


    public function show(string $id)
    {
        $reschedule = Reschedule::where('id', $id)->first();

        if (!$reschedule) abort(404, 'Reschedule fetched successfully');

        return response()->json(['message' => 'Reschedule fetched successfully', $reschedule]);
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
