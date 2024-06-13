<?php

namespace App\Http\Controllers\Api;

use App\Models\Movie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('movie_rooms','rooms','slots')->whereHas('movie_rooms', function ($query) {
            $query->whereNotNull('date_projection')
                  ->whereBetween('date_projection', [Carbon::now(), Carbon::now()->addDays(7)]);
        })->get();
        

        return response()->json([
            'status' => 'success',
            'message' => 'Movies retrieved successfully',
            'results' => $movies
        ], 200);
    }
}
