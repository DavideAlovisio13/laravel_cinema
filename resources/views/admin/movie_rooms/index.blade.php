@extends('layouts.admin')
@section('title', 'Projections')
@section('content')
<section class="container-fluid">
    <h2>Projection</h2>
    <div class="card my-5">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-danger bg-transparent">Id</th>
                        <th scope="col" class="text-danger bg-transparent">Movie title</th>
                        <th scope="col" class="text-danger bg-transparent">Room</th>
                        <th scope="col" class="text-danger bg-transparent">Ticket Price</th>
                        <th scope="col" class="text-danger bg-transparent">Seats</th>
                        <th scope="col" class="text-danger bg-transparent">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider ">
                    @foreach ($movieRoom as $projection)
                        <tr>
                            <td class="bg-transparent text-black border-bottom-0">{{ $projection->id }}</td>
                            <td class="bg-transparent text-black border-bottom-0">{{ $projection->movie->title }}</td>
                            <td class="bg-transparent text-black border-bottom-0">{{ $projection->room->name }}</td>
                            <td class="bg-transparent text-black border-bottom-0">{{ $projection->ticket_price }}</td>
                            <td class="bg-transparent text-black border-bottom-0">{{ $projection->room->seats }}</td>
                            <td class=" bg-transparent text-black d-flex border-bottom-0 flex-column justify-content-center align-items-center">
                                <a href="{{ route('admin.movie_rooms.show', $projection->id) }}"><i
                                        class="fa-solid text-danger fa-eye"></i></a>
                                <a href="{{ route('admin.movie_rooms.edit', $projection->id) }}"><i
                                        class="fa-solid text-danger fa-pen"></i></a>
                                <form action="{{ route('admin.movie_rooms.destroy', $projection->id) }}" method="POST"
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

    <div class="d-flex justify-content-center">
        @foreach ($weeklyMovies as $projection)
        {{ ($projection->movie->title) }}
        @endforeach
    </div>

</section>
<a href="{{ route('admin.movie_rooms.create') }}" class="btn btn-danger">Create a new projection</a>

</div>
@include('admin.partials.modal-delete')

@endsection