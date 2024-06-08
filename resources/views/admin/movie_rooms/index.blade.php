@extends('layouts.admin')
@section('title', 'Projections')
@section('content')
<div class="card my-5">
    <div class="card-body">
        <table class="table">
            <thead>
                    <tr>
                        <th scope="col" class="text-danger bg-transparent">Id</th>
                        <th scope="col" class="text-danger bg-transparent">Title</th>
                        <th scope="col" class="text-danger bg-transparent">Room</th>
                        <th scope="col" class="text-danger bg-transparent">Ticket Price</th>
                        <th scope="col" class="text-danger bg-transparent">Seats</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider ">
                    @foreach ($movies_rooms as $projection)
                        <tr>
                            <td class="bg-transparent text-black border-bottom-0">{{ $projection->id }}</td>
                            <td class="bg-transparent text-black border-bottom-0">{{ $projection->movie->title }}</td>
                            <td class="bg-transparent text-black border-bottom-0">{{ $projection->room->name }}</td>
                            <td class="bg-transparent text-black border-bottom-0">{{ $projection->ticket_price }}</td>
                            <td class="bg-transparent text-black border-bottom-0">{{ $projection->room->seats }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>       
    </div>
    <a href="{{ route('admin.movie_rooms.create') }}" class="btn btn-danger">Create a new projection</a>

</div>
@include('admin.partials.modal-delete')

@endsection