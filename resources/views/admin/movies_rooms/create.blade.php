@extends('layouts.admin')
@section('title', 'inserisci un nuovo film')
@section('content')

    <section>
        <h2 class="text-center tet-uppercase">inserisci un nuovo film</h2>
        <form class="row g-3" action="{{ route('admin.movies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <select name="movies_id" id="movies_id" class="form-label ">
                <option value="">select type</option>
                @foreach ($movies as $movie)
                    <option value="{{ $movie->id }}" {{ $movie->id == old('movies_id') ? 'selected' : '' }}>
                        {{ $movie->title }}</option>
                @endforeach
            </select>
            <select name="rooms_id" id="rooms_id" class="form-label ">
                <option value="">select type</option>
                @foreach ($rooms as $room)
                    <option value="{{ $room->id }}" {{ $room->id == old('rooms_id') ? 'selected' : '' }}>
                        {{ $room->name }}</option>
                @endforeach
            </select>
            <select name="slots_id" id="slots_id" class="form-label ">
                <option value="">select type</option>
                @foreach ($slots as $slot)
                    <option value="{{ $slot->id }}" {{ $slot->id == old('slots_id') ? 'selected' : '' }}>
                        {{ $slot->time_slot }}</option>
                @endforeach
            </select>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">crea</button>
            </div>
        </form>
    </section>
@endsection
