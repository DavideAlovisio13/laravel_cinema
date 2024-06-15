@extends('layouts.admin')
@section('title', 'Projections')
@section('content')
<section class="container-fluid">
<div class="d-flex justify-content-between align-items-center mt-3">
        <h2>Proiezioni</h2>
        <a href="{{ route('admin.movie_rooms.create') }}" class="btn btn-danger w-25">Inserisci nuova proiezione</a>
    </div>
    <div class="card my-5">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-danger bg-transparent">Id</th>
                        <th scope="col" class="text-danger bg-transparent">Movie cover</th>
                        <th scope="col" class="text-danger bg-transparent">Movie title</th>
                        <th scope="col" class="text-danger bg-transparent">Room</th>
                        <th scope="col" class="text-danger bg-transparent">Date</th>
                        <th scope="col" class="text-danger bg-transparent">Start time</th>
                        <th scope="col" class="text-danger bg-transparent">Ticket Price</th>
                        <th scope="col" class="text-danger bg-transparent">Seats</th>
                        <th scope="col" class="text-danger bg-transparent">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider ">
                    @foreach ($movieRoom as $projection)
                        <tr>
                            <td class="bg-transparent text-black border-bottom-0 align-middle">{{ $projection->id }}</td>
                            <td class="bg-transparent text-black border-bottom-0 w-25">
                                <img src="{{ $projection->movie->thumb }}" alt="{{ $projection->movie->title }}" class="w-75">
                            </td>
                            <td class="bg-transparent text-black border-bottom-0 align-middle">{{ $projection->movie->title }}</td>
                            <td class="bg-transparent text-black border-bottom-0 align-middle">{{ $projection->room->name }}</td>
                            <td class="bg-transparent text-black border-bottom-0 align-middle">{{ $projection->date_projection }}</td>
                            <td class="bg-transparent text-black border-bottom-0 align-middle">{{ $projection->slot->start_time }}</td>
                            <td class="bg-transparent text-black border-bottom-0 align-middle">{{ $projection->ticket_price }}</td>
                            <td class="bg-transparent text-black border-bottom-0 align-middle">{{ $projection->room->seats }}</td>
                            <td class=" bg-transparent text-black d-flex border-bottom-0 flex-column justify-content-center align-items-center">
                                <a href="{{ route('admin.movie_rooms.show', $projection->id) }}" class="mt-3"><i
                                        class="fa-solid text-danger fa-eye"></i></a>
                                <a href="{{ route('admin.movie_rooms.edit', $projection->id) }}" class="mt-3"><i
                                        class="fa-solid text-danger fa-pen"></i></a>
                                <form action="{{ route('admin.movie_rooms.destroy', $projection->id) }}" class="mt-3" method="POST"
                                    class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-button border-0 bg-transparent"
                                        data-item-title="{{ $projection->id }}">
                                        <i class="fa-solid text-danger fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</section>


@include('admin.partials.modal-delete')

@endsection