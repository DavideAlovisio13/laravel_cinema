@extends('layouts.admin')
@section('title', 'inserisci un nuovo film')
@section('content')

<section>
    <h2 class="text-center tet-uppercase">Create a new projection</h2>
    <form class="row g-3" action="{{ route('admin.movie_rooms.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="movie_id">Movie</label>
        <select name="movie_id" id="movie_id" class="form-control">
            <option value="">select movie</option>
            @foreach ($movies as $movie)
                <option value="{{ $movie->id }}" {{ $movie->id == old('movies_id') ? 'selected' : '' }}>
                    {{ $movie->title }}
                </option>
            @endforeach
        </select>
        <label for="room_id">Room</label>
        <select name="room_id" id="room_id" class="form-control ">
            <option value="">select room</option>
            @foreach ($rooms as $room)
                <option value="{{ $room->id }}" {{ $room->id == old('rooms_id') ? 'selected' : '' }}>
                    {{ $room->name }}
                </option>
            @endforeach
        </select>
        <label for="slot_id">Slot</label>
        <select name="slot_id" id="slot_id" class="form-control ">
            <option value="">select slot</option>
            @foreach ($slots as $slot)
                <option value="{{ $slot->id }}" {{ $slot->id == old('slots_id') ? 'selected' : '' }}>
                    {{ $slot->time_slot }}
                </option>
            @endforeach
        </select>
        <div class="d-flex justify-content-between">
            <div class="p-0 w-75">
                <label for="date_projection">Date Projection</label>
                <input type="date" name="date_projection" class="form-control w-25" id="date_projection" value="{{ old('date_projection') }}">
            </div>
            {{-- <div class="w-50">
                <label for="ticket_price">Ticket Price</label>
                <input type="text" name="ticket_price" class="form-control w-25" id="price" value="{{ old('ticket_price') }}">
            </div> --}}
        </div>


        <div class="col-12">
            <button type="submit" class="btn bg-bordeaux">Create</button>
        </div>
    </form>
</section>
@endsection