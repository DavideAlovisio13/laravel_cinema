@extends('layouts.app')
@section('content')
    <section id="scopri" class="py-4">
        <div class="px-5">
            <h2 class="display-4 fw-bolder pb-2 text-center pb-4 blue">Scopri il nostro cinema!</h2>
            <h3 class=" pb-2 text-center pb-4 blue font-italic" style="font-family: Georgia, 'Times New Roman', Times, serif">
                “Non c’è nessuna forma d’arte come il
                cinema per colpire la coscienza, scuotere le emozioni e raggiungere le stanze segrete dell’anima.
                ”.</h3>
            <h5 class=" pb-2 text-center pb-4 blue font-weight-light">(Ingmar Bergman)</h5>
            <div class="body-carousel">
                <input type="radio" name="position" />
                <input type="radio" name="position" />
                <input type="radio" name="position" checked />
                <input type="radio" name="position" />
                <input type="radio" name="position" />
                <div id="carousel">
                    <div class="item mx-4">
                        <img src="https://picsum.photos/300/300" alt="" />
                    </div>
                    <div class="item mx-4">
                        <img src="https://picsum.photos/300/300" alt="" />
                    </div>
                    <div class="item mx-4">
                        <img src="https://picsum.photos/300/300" alt="" />
                    </div>
                    <div class="item mx-4">
                        <img src="https://picsum.photos/300/300" alt="" />
                    </div>
                    <div class="item mx-4">
                        <img src="https://picsum.photos/300/300" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('admin.rooms.index') }}">
            <h2>Scopri le nostre sale</h2>
        </a>
    </section>
@endsection
