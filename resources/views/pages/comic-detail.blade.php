@extends('layout.app')

@section('page-title', 'COMICS')

@section('main-content')
    <section class="gallery">
        <div class="container">
            <div class="gallery-img">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
            </div>
        </div>
    </section>
    <section class="description">
        <div class="container mb-2">
            <div class="row my-5">
                <div class="col-8">
                    <h2 class="text-uppercase">{{ $comic['title'] }}</h2>
                    <p>{{ $comic['description'] }}</p>
                </div>
                <div class="col-4">
                    <div class="ad text-end fw-bold">
                        ADVERTISMENT
                        <img src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="">
                    </div>
                </div>
            </div>

            <a href="{{ route('comics.edit', $comic) }}">
                <button class="btn btn-primary me-2">Update Comic
                    #{{ $comic->id }} Data
                </button>
            </a>

            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                data-bs-target="#delete-{{ $comic->id }}-comic">
                Delete Comic #{{ $comic->id }}
            </button>




        </div>
    </section>
    <section class="infos pt-3">
        <div class="container">
            <div class="row gx-5">
                <div class="col-6">
                    <h3>Talent</h3>
                    <div class="info d-flex">
                        <div class="subtitle">Art by:</div>
                        <div class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi a
                            necessitatibus omnis nihil
                            molestias libero facilis maiores dolorum facere. Sapiente harum explicabo dicta? Perspiciatis
                            nulla unde reiciendis saepe maiores nostrum.
                        </div>
                    </div>
                    <div class="info d-flex">
                        <div class="subtitle">Written by:</div>
                        <div class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi a
                            necessitatibus omnis nihil
                            molestias libero facilis maiores dolorum facere. Sapiente harum explicabo dicta? Perspiciatis
                            nulla unde reiciendis saepe maiores nostrum.
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h3>Specs</h3>
                    <div class="info d-flex">
                        <div class="subtitle">Series</div>
                        <div class="text-uppercase">{{ $comic['series'] }}
                        </div>
                    </div>
                    <div class="info d-flex">
                        <div class="subtitle">U.S. Price</div>
                        <div class="">{{ $comic->get_price() }}
                        </div>
                    </div>
                    <div class="info d-flex">
                        <div class="subtitle">On Sale Date:</div>
                        <div class="">{{ $comic['sale_date'] }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ route('comics.index') }}">
                    <i class="fa-solid fa-left-long"></i>
                    Torna indietro</a>
            </div>
        </div>

    </section>
@endsection

@section('modal')
    <div class="modal fade" id="delete-{{ $comic->id }}-comic" tabindex="-1"
        aria-labelledby="delete-{{ $comic->id }}-comic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="delete-{{ $comic->id }}-comic">Are you sure to delete
                        #{{ $comic->id }} comic?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    This could cause permanent changes.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form method="POST" action="{{ route('comics.destroy', $comic) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete Comic #{{ $comic->id }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
