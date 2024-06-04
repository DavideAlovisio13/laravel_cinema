@extends('layouts.app')
@section('title', 'Film')
@section('content')
<a href="{{route('admin.movies.create')}}" class="btn btn-primary">
    Crea nuovo film
</a>
<ul>
    @foreach ($movies as $movie)
        <li><a href="{{route('admin.movies.show', $movie->slug)}}">Nome:{{$movie->title }}</a>
            <form action="{{ route('admin.movies.destroy', $movie->slug) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn p-0 delete-button" data-item-title="{{ $movie->title }}"><i
                        class="fa-solid fa-trash" style="color: #0A58CA"></i></button>
            </form>
        </li>
    @endforeach
</ul>
@include('admin.partials.modal-delete')

@endsection