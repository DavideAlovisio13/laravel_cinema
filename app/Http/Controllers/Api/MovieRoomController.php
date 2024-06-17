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

    public function getSlots(Request $request)
    {
        if ($request->query('rid') && $request->query('pdate')) {
            $rid = $request->query('rid');
            $pdate = $request->query('pdate');
            $slots_projection = MovieRoom::where('room_id', $rid)
                ->where('date_projection', $pdate)->get();
        }else{
            $slots_projection =[];
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Projections retrieved successfully',
            'results' => $slots_projection
        ], 200);
    }
}