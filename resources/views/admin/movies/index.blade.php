@extends('layouts.app')
@section('title', 'Film')
@section('content')
<a href="{{route('admin.movies.create')}}" class="btn btn-primary">
    Crea nuovo film
</a>
<ul>
    @foreach ($movies as $movie)
        <li><a href="{{route('admin.movies.show', $movie->slug)}}">Nome:{{$movie->title }}</a>
    @endforeach

</ul>
@endsection