@extends('layout.app')

@section('page-title', 'COMICS')

@section('main-content')
    <section class="comics pt-5">
        <div class="container">
            <div class="row g-4 mb-5">
                @forelse ($comics as $comic)
                    <div class="col-2">
                        <a href="{{ route('comics.show', $comic) }}">
                            <div class="thumb">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                            </div>
                        </a>
                        {{ $comic['series'] }}
                    </div>
                @empty
                    <div class="col-12">
                        <span class="text-danger">Nessun Fumetto</span>
                    </div>
                @endforelse
            </div>
            <div class="title">CURRENT SERIES</div>
            <div class="row justify-content-center align-center">

                <div class="col-2 more m-3"><a href="{{ route('comics.create') }}" class="text-white">ADD COMIC</a></div>

            </div>
        </div>
    </section>
    <section class="comics-navbar d-flex justify-content-center align-items-center">
        <div class="nav-option">
            <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="">
            <span class="ms-2">DIGITAL COMICS</span>
        </div>
        <div class="nav-option">
            <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="">
            <span class="ms-2">DC MERCHANDISE</span>
        </div>
        <div class="nav-option">
            <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="">
            <span class="ms-2">SUBSCRIPTION</span>
        </div>
        <div class="nav-option">
            <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="">
            <span class="ms-2">COMIC SHOP LOCATOR</span>
        </div>
        <div class="nav-option">
            <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="">
            <span class="ms-2">DC POWER VISA</span>
        </div>
    </section>
@endsection
