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
                        <th scope="col" class="text-danger bg-transparent">Description</th>
                        <th scope="col" class="text-danger bg-transparent">Language</th>
                        <th scope="col" class="text-danger bg-transparent">release_date</th>
                        <th scope="col" class="text-danger bg-transparent">Azioni</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider ">
                    @foreach ($movies_rooms as $projection)
                        <tr>
                            <td class="bg-transparent text-black border-bottom-0">{{ $projection->ticket_price }}</td>
                            <td class="bg-transparent text-black border-bottom-0">{{ $projection->date_projection }}</td>
                            <td class="bg-transparent text-black border-bottom-0">{{ $projection->movie->title }}</td>
                            <td class="bg-transparent text-black border-bottom-0">{{ $projection->room->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>        
    </div>
    @include('admin.partials.modal-delete')

@endsection
