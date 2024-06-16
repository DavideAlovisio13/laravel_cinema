@extends('layouts.admin')
@section('title', 'Movies')
@section('content')
<section class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mt-3">
        <h2>Movies</h2>
        <a href="{{ route('admin.movies.create') }}" class="btn btn-danger w-25">Inserisci nuovo film</a>
    </div>
    <div class="card my-5">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-danger bg-transparent">Id</th>
                        <th scope="col" class="text-danger bg-transparent">Cover</th>
                        <th scope="col" class="text-danger bg-transparent">Title</th>
                        <th scope="col" class="text-danger bg-transparent">Description</th>
                        <th scope="col" class="text-danger bg-transparent">Language</th>
                        <th scope="col" class="text-danger bg-transparent">Release_date</th>
                        <th scope="col" class="text-danger bg-transparent">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider ">
                    @foreach ($movies as $movie)
                        <tr>
                            <td class="bg-transparent text-black border-bottom-0 align-middle">{{ $movie->id }}</td>
                            <td class="bg-transparent text-black border-bottom-0 ">
                                <img src="{{ $movie->thumb }}" alt="{{ $movie->title }}" class="w-100">
                            </td>
                            <td class="bg-transparent text-black border-bottom-0 align-middle">{{ $movie->title }}</td>
                            <td class="bg-transparent text-black border-bottom-0 align-middle description-truncate">{{ $movie->description }}</td>
                            <td class="bg-transparent text-black border-bottom-0 align-middle">{{ $movie->language }}</td>
                            <td class="bg-transparent text-black border-bottom-0 align-middle">{{ $movie->release_date }}</td>
                            <td class=" bg-transparent text-black d-flex border-bottom-0 flex-column justify-content-center align-items-center">
                                <a href="{{ route('admin.movies.show', $movie->slug) }}"class="mt-3"><i
                                        class="fa-solid text-danger fa-eye"></i></a>
                                <a href="{{ route('admin.movies.edit', $movie->slug) }}"class="mt-3"><i
                                        class="fa-solid text-danger fa-pen"></i></a>
                                <form action="{{ route('admin.movies.destroy', $movie->slug) }}" class="mt-3" method="POST"
                                    class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-button border-0 bg-transparent"
                                        data-item-title="{{ $movie->title }}">
                                        <i class="fa-solid text-danger fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{ route('admin.movies.reviews.create', $movie->id) }}" class="mt-3"><i class="fa-regular text-danger fa-star-half-stroke"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@include('admin.partials.modal-delete')

@endsection