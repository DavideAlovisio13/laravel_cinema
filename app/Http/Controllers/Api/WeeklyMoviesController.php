<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\MovieRoom;

class WeeklyMoviesController extends Controller
{

    public function index() {
        $today = Carbon::today();
        // dd($today);
        $nextWeek = Carbon::today()->addWeek();
        // dd($nextWeek);
        $weeklyMovies = MovieRoom::whereDate('date_projection', '<=', $nextWeek)->whereDate('date_projection', '>=', $today)->get();
        return response()->json([
            'status' => 'success',
            'message' => 'ok',
            'data' => $weeklyMovies
        ], 200);
    }
}
