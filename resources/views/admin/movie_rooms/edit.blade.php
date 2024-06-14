@extends('layouts.admin')
@section('title', 'Modifica proiezione')
@section('content')

<section>
    <h2 class="text-center text-uppercase">Modifica proiezione</h2>
    <form class="" action="{{route('admin.movie_rooms.update', $movieRoom)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="movie" class="form-label">film</label>
            <select name="movie_id" id="movie_id" class="form-label">
                @foreach ($movies as $movie)
                    <option value="{{ $movie->id }}" {{$movieRoom->movie_id == $movie->id ? 'selected' : ''}}>
                        {{ $movie->title }}
                    </option>
                @endforeach
            </select>
            <div class="col-md-6">
                <label for="room" class="form-label">Sala</label>
                <select name="room_id" id="room_id" class="form-label">
                    @foreach ($rooms as $room)
                        <option value="{{ $room->id }}" {{ $movieRoom->room_id == $room->id ? 'selected' : '' }}>
                            {{ $room->name }}
                        </option>
                    @endforeach
                </select>

                <label for="room" class="form-label">fascia oraria</label>
                <select name="slot_id" id="slot_id" class="form-label">
                    @foreach ($slots as $slot)
                        <option value="{{ $slot->id }}" {{$movieRoom->slot_id == $slot->id ? 'selected' : '' }}>
                            {{ $slot->time_slot }}
                        </option>
                    @endforeach
                </select>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">modifica</button>
                    <button type="reset" class="btn btn-primary">reset</button>
                </div>
            </div>
            @endsection