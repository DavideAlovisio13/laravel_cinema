<?php

namespace App\Http\Controllers\Api;

use App\Models\MovieRoom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class MovieRoomController extends Controller
{
    public function index()
    {
        $projections = MovieRoom::with('movie', 'room', 'slot')->get();
        return response()->json([
            'status' => 'success',
            'message' => 'Projections retrieved successfully',
            'results' => $projections
        ], 200);
    }
}