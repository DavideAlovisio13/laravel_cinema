<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\MovieRoom;
use App\Models\Movie;
use App\Models\Room;
use App\Models\Slot;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMovieRoomRequest;
use App\Http\Requests\UpdateMovieRoomRequest;

class MovieRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movieRoom = MovieRoom::orderBy('date_projection', 'desc')->get();
        $movies = Movie::all();
        $rooms = Room::all();
        return view('admin.movie_rooms.index', compact('movieRoom', 'movies', 'rooms'));
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
        return redirect()->route('admin.movie_rooms.index')->with('message', 'ok');
     }

    /**
     * Display the specified resource.
     */
    public function show(MovieRoom $movieRoom)
    {
        return view('admin.movie_rooms.show', compact('movieRoom'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MovieRoom $movieRoom)
    {
        $movies = Movie::all();
        $rooms = Room::all();
        $slots = Slot::all();
        
        return view('admin.movie_rooms.edit', compact('movies', 'rooms', 'slots', 'movieRoom'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MovieRoom $movieRoom)
    {
        $data_update = $request->all();
        $room = Room::findOrFail($data_update['room_id']);
        if($room->isense == 1 ){
            $data_update['ticket_price'] = $room->base_price + 3;
        } else{
            $data_update['ticket_price'] = $room->base_price;
        }
        $movieRoom->update($data_update);
        return redirect()->route('admin.movie_rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MovieRoom $movieRoom)
    {
        $movieRoom->delete();
        return redirect()->route('admin.movie_rooms.index');
    }
}
