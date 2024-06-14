@extends('layouts.admin')
@section('title',$movie->title)
@section('content')
<h1 class="text-center">{{$movie->title}}</h1>


<section class="container d-flex">
    <div class="d-flex justify-content-center ">
        <img src="{{$movie->thumb}}" alt="{{ $movie->title }}" class="w-50">
    </div>
    <div class="container d-flex flex-column justify-content-between">
        <p>{{$movie->description}}</p>
        <div>
            <ul>
                <li>
                    <span>Durata: {{$movie->minutes}} &nbsp;min</span>
                </li>
                <li>
                    <span>Lingua: {{$movie->language}}</span>
                </li>
                <li>
                    <span>Uscita: {{$movie->release_date}}</span>
                </li>
                <li>
                    <span>Trailer: {{$movie->trailer}}</span>
                </li>
            </ul>
        </div>
        <div class="d-flex"></div>
        <div>
            @foreach ($reviews as $index => $review)
            @include('admin.partials.review-card')
            @endforeach
        </div>

    </div>

</section>

@endsection