@extends('layouts.app')
@section('title','Crea nuova sala')
@section('content')
<form action="{{route('admin.rooms.store')}}" method="POST">
    @csrf
    <!-- QUI FORM DI CREAZIONE NUOVA SALA -->
</form>
@endsection