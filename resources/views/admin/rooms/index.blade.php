@extends('layouts.app')
@section('title', 'Sale')
@section('content')

<div class="card my-5">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-danger bg-transparent">Id</th>
                    <th scope="col" class="text-danger bg-transparent">Nome</th>
                    <th scope="col" class="text-danger bg-transparent">Colore</th>
                    <th scope="col" class="text-danger bg-transparent">Posti a sedere</th>
                    <th scope="col" class="text-danger bg-transparent">Isense</th>
                    <th scope="col" class="text-danger bg-transparent">Azioni</th>
                </tr>
            </thead>
            <tbody class="table-group-divider ">
                @foreach ($rooms as $room)
                    <tr>
                        <td class="bg-transparent text-black border-bottom-0">{{ $room->id }}</td>
                        <td class="bg-transparent text-black border-bottom-0">{{ $room->name }}</td>
                        <td class="bg-transparent text-black border-bottom-0">{{ $room->alias }}</td>
                        <td class="bg-transparent text-black border-bottom-0">{{ $room->seats }}</td>
                        </td>
                        <td class="bg-transparent text-black border-bottom-0">{{ $room->isense }}</td>
                        </td>
                        <td
                            class=" bg-transparent text-black d-flex border-bottom-0 flex-column justify-content-center align-items-center">
                            <a href="{{ route('admin.rooms.show', $room->id) }}"><i
                                    class="fa-solid text-danger fa-eye"></i></a>
                            <a href="{{ route('admin.rooms.edit', $room->id) }}"><i
                                    class="fa-solid text-danger fa-pen"></i></a>
                            <form action="{{ route('admin.rooms.destroy', $room->id) }}" method="POST"
                                class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button border-0 bg-transparent"
                                    data-item-title="{{ $room->name }}">
                                    <i class="fa-solid text-danger fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('admin.rooms.create') }}" class="btn btn-danger">Create a new post</a>
</div>
@include('admin.partials.modal-delete')


{{-- <a href="{{route('admin.rooms.create')}}" class="btn btn-primary">
    Crea nuova sala
</a>
<ul>
    @foreach ($rooms as $room)
        <li><a href="{{route('admin.rooms.show', $room->id)}}">Nome:{{$room->name }}</a> prezzo:{{$room->base_price}}</li>
    @endforeach

</ul> --}}
@endsection