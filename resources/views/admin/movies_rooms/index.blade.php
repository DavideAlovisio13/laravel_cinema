@extends('layouts.app')
@section('title', 'Film')
@section('content')
<div class="card my-5">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-danger bg-transparent">Id</th>
                    <th scope="col" class="text-danger bg-transparent">Title</th>
                    <th scope="col" class="text-danger bg-transparent">Room</th>
                    <th scope="col" class="text-danger bg-transparent">Date</th>
                    <th scope="col" class="text-danger bg-transparent">Slot</th>
                    <th scope="col" class="text-danger bg-transparent">Price</th>
                    <th scope="col" class="text-danger bg-transparent">Azioni</th>
                </tr>
            </thead>
            <tbody class="table-group-divider ">
                @foreach ($movies_rooms as $projection)
                    <tr>
                        <td class="bg-transparent text-black border-bottom-0">{{ $projection->id }}</td>
                        <td class="bg-transparent text-black border-bottom-0">{{ $projection->movie->title }}</td>
                        <td class="bg-transparent text-black border-bottom-0">{{ $projection->room->name }}</td>
                        <td class="bg-transparent text-black border-bottom-0">{{ $projection->date_projection }}</td>
                        <td class="bg-transparent text-black border-bottom-0">{{ $projection->slot->time_slot }}</td>
                        <td class="bg-transparent text-black border-bottom-0">{{ $projection->ticket_price }} €</td>
                        <td class="bg-transparent text-black border-bottom-0">
                            <a class="text-black" href="{{ route('admin.movies_rooms.edit', $projection->id) }}"><i
                                    class="fa-solid fa-pen"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('admin.movies_rooms.create') }}" class="btn btn-danger">Create a new projection</a>

</div>
@include('admin.partials.modal-delete')

@endsection