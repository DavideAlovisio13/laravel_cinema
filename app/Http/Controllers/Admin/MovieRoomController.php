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
        return view('admin.movie_rooms.create', compact('movies', 'rooms', 'slots'));    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRoomRequest $request)
    {
        $form_data = $request->validated();
        $newMovieRoom = new MovieRoom();
        $room = Room::findOrFail($form_data['room_id']);
        if($room->isense == 1 ){
            $form_data['ticket_price'] = $room->base_price + 3;
        } else{
            $form_data['ticket_price'] = $room->base_price;
        }
        $newMovieRoom->fill($form_data);
        $newMovieRoom->save();
        if ($request->has('room_id')) {
            $newMovieRoom->room()->associate($request->room_id);
        }
        if ($request->has('movie_id')) {
            $newMovieRoom->movie()->associate($request->movie_id);
        }
        if ($request->has('slot_id')) {
            $newMovieRoom->slot()->associate($request->slot_id);
        }
        return redirect()->route('admin.movie_rooms.index')->with('message', 'La sala' . $form_data['name'] . ' è stata creata');
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
