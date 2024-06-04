@extends('layouts.app')
@section('title', 'Sale')
@section('content')

<section id="all-rooms">
    <div class="container hype-unselectable">
        <div class="d-flex justify-content-center mt-3">
            <h2 class="py-4 hype-text-shadow text-white">Le nostre Sale</h2>
        </div>
        <table class="table table-dark table-hover shadow my-5 hype-unselectable table-clickable">
            <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th class="d-none d-lg-table-cell" scope="col">Nome</th>
                    <th class="d-none d-lg-table-cell" scope="col">Colore</th>
                    <th scope="col">Posti a sedere</th>
                    <th scope="col">ISense</th>
                    <th scope="col">Prezzo Base</th>
                    <th scope="col">Vista</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                    <tr>
                        <td><a href="{{ route('admin.rooms.show', $room->id) }}">{{ $room->id }} </a></td>
                        <td class=" d-lg-table-cell"><a
                                href="{{ route('admin.rooms.show', $room->id) }}">{{ $room->name }}</a></td>
                        <td class=" d-lg-table-cell"><a
                                href="{{ route('admin.rooms.show', $room->id) }}">{{ $room->alias }}</a></td>
                        <td><a href="{{ route('admin.rooms.show', $room->id) }}">{{ $room->seats }}</a></td>
                        <td><a href="{{ route('admin.rooms.show', $room->id) }}">{{ $room->isense }}</a>
                        </td>
                        <td><a href="{{ route('admin.rooms.show', $room->id) }}">{{ $room->base_price}}</a></td>
                        <td class="d-flex align-items-center gap-2">
                            <a href="{{ route('admin.rooms.show', $room->id) }}"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.rooms.edit', $room->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('admin.rooms.destroy', $room->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn p-0 delete-button" data-item-title="{{ $room->name }}"><i class="fa-solid fa-trash" style="color: #0A58CA"></i></button>


                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('admin.partials.modal-delete')
    </div>
</section>


{{-- <a href="{{route('admin.rooms.create')}}" class="btn btn-primary">
    Crea nuova sala
</a>
<ul>
    @foreach ($rooms as $room)
        <li><a href="{{route('admin.rooms.show', $room->id)}}">Nome:{{$room->name }}</a> prezzo:{{$room->base_price}}</li>
    @endforeach

</ul> --}}
@endsection