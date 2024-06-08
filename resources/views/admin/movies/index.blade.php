@extends('layouts.admin')
@section('title', 'Movies')
@section('content')
    <section class="container-fluid">
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
                        @foreach ($movies as $movie)
                            <tr>
                                <td class="bg-transparent text-black border-bottom-0">{{ $movie->id }}</td>
                                <td class="bg-transparent text-black border-bottom-0">{{ $movie->title }}</td>
                                <td class="bg-transparent text-black border-bottom-0">{{ $movie->description }}</td>
                                <td class="bg-transparent text-black border-bottom-0">{{ $movie->language }}</td>
                                </td>
                                <td class="bg-transparent text-black border-bottom-0">{{ $movie->release_date }}</td>
                                </td>
                                <td
                                    class=" bg-transparent text-black d-flex border-bottom-0 flex-column justify-content-center align-items-center">
                                    <a href="{{ route('admin.movies.show', $movie->slug) }}"><i
                                            class="fa-solid text-danger fa-eye"></i></a>
                                    <a href="{{ route('admin.movies.edit', $movie->slug) }}"><i
                                            class="fa-solid text-danger fa-pen"></i></a>
                                    <form action="{{ route('admin.movies.destroy', $movie->slug) }}" method="POST"
                                        class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-button border-0 bg-transparent"
                                            data-item-title="{{ $movie->title }}">
                                            <i class="fa-solid text-danger fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a href="{{ route('admin.movies.create') }}" class="btn btn-danger">Create a new post</a>
        </div>
    </section>
    @include('admin.partials.modal-delete')

@endsection
