<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\MovieRoom;
use App\Models\Movie;
use App\Models\Room;
use App\Models\Slot;
use App\Http\Requests\StoreMovieRoomRequest;
use App\Http\Requests\UpdateMovieRoomRequest;

class MovieRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies_rooms = MovieRoom::all();
        $movies = Movie::all();
        $rooms = Room::all();
        return view('admin.movies_rooms.index', compact('movies_rooms', 'movies', 'rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movies = Movie::all();
        $rooms = Room::all();
        $slots = Slot::all();
        return view('admin.movies_rooms.create', compact('movies', 'rooms', 'slots'));    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRoomRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(MovieRoom $movieRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MovieRoom $movieRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRoomRequest $request, MovieRoom $movieRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MovieRoom $movieRoom)
    {
        //
    }
}
