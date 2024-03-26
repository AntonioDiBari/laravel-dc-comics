@extends('layout.app')

@section('page-title', 'MODIFICA FUMETTO ' . $comic->id)

@section('main-content')
    <div class="container my-4">
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="row g-3">
                <div class="col-3">
                    <label for="title" class="form-label">Comic Title</label>
                    <input type="text" class="form-control" id="title" name="title" required
                        value="{{ $comic->title }}" />
                </div>
                <div class="col-3">
                    <label for="series" class="form-label">Comic Series</label>
                    <input type="text" class="form-control" id="series" name="series" required
                        value="{{ $comic->series }}" />
                </div>
                <div class="col-3">
                    <label for="type" class="form-label">Comic Type</label>
                    <input type="text" class="form-control" id="type" name="type" required
                        value="{{ $comic->type }}" />
                </div>
                <div class="col-3">
                    <label for="sale_date" class="form-label">Comic Release Date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" required
                        value="{{ $comic->sale_date }}" />
                </div>
                <div class="col-3">
                    <label for="price" class="form-label">Comic Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="es. 10.49"
                        required value="{{ $comic->price }}" />
                </div>
                <div class="col-6">
                    <label for="thumb" class="form-label">Thumb URL</label>
                    <input type="url" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}" />
                </div>
                <div class="col-12">
                    <textarea class="form-control" id="description" name="description" rows="4">{{ $comic->description }}</textarea>
                </div>

                <div class="col-2"><button class="btn btn-primary">Modifica</button></div>
            </div>
        </form>
    </div>
@endsection
