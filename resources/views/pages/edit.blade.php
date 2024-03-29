@extends('layout.app')

@section('page-title', 'MODIFICA FUMETTO ' . $comic->id)

@section('main-content')
    <div class="container my-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li> <br>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="row g-3">
                <div class="col-3">
                    <label for="title" class="form-label">Comic Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" value="{{ old('title') ?? $comic->title }}"{{-- required --}} />
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-3">
                    <label for="series" class="form-label">Comic Series</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"
                        name="series" value="{{ old('series') ?? $comic->series }}" {{-- required --}} />
                    @error('series')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-3">
                    <label for="type" class="form-label">Comic Type</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type"
                        name="type" value="{{ old('type') ?? $comic->type }}" {{-- required --}} />
                    @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-3">
                    <label for="sale_date" class="form-label">Comic Release Date</label>
                    <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                        name="sale_date" value="{{ old('sale_date') ?? $comic->sale_date }}" {{-- required --}} />
                    @error('sale_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-3">
                    <label for="price" class="form-label">Comic Price</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                        name="price" placeholder="es. 10.49" value="{{ old('price') ?? $comic->price }}"
                        {{-- required --}} />
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="thumb" class="form-label">Thumb URL</label>
                    <input type="url" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                        name="thumb" value="{{ old('thumb') ?? $comic->thumb }}" />
                    @error('thumb')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12">
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                        rows="4" placeholder="Insert comic's description">{{ old('description') ?? $comic->description }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-2"><button class="btn btn-primary">Modifica</button></div>
            </div>
        </form>
    </div>
@endsection
