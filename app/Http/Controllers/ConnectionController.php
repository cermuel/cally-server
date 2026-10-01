<?php

namespace App\Http\Controllers;

use App\Http\Resources\ConnectionResource;
use App\Models\Connection;
use Illuminate\Http\Request;

class ConnectionController extends Controller
{

    public function index(Request $request)
    {
        $user = $request->user();
        $connections =  Connection::where('user_id', $user->id)->get();

        return response()->json(['message' => 'User connections fetched successfully', 'connection' => ConnectionResource::collection($connections)]);
    }
}
