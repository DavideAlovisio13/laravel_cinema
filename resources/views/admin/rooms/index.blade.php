@extends('layouts.app')
@section('title','Sale')
@section('content')
<ul>
    @foreach ($rooms as $room)
    <li><a href="{{route('admin.rooms.show', $room->id)}}">Nome:{{$room->name }}</a> prezzo:{{$room->base_price}}</li>
    @endforeach

</ul>
@endsection