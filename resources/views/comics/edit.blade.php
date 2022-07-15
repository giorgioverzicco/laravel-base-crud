@extends('layouts.base')

@section('page-title')
    Create a Comic
@endsection

@section('page-content')
    <div class="row py-4">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="comic-title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="comic-title" name="title" value="{{ $comic->title }}">
            </div>

            <div class="mb-3">
                <label for="comic-description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="comic-description" name="description" rows="4">{{ $comic->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="comic-thumb" class="form-label">Poster</label>
                <input type="text" class="form-control" id="comic-thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>

            <div class="mb-3">
                <label for="comic-price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="comic-price" name="price" min="0" max="255" step="any" value="{{ $comic->price }}">
            </div>

            <div class="mb-3">
                <label for="comic-series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="comic-series" name="series" value="{{ $comic->series }}">
            </div>

            <div class="mb-3">
                <label for="comic-sale-date" class="form-label">Data di Vendita</label>
                <input type="date" class="form-control" id="comic-sale-date" name="sale_date" value="{{ $comic->sale_date }}">
            </div>

            <div class="mb-3">
                <label for="comic-type" class="form-label">Tipologia</label>
                <select class="form-select" id="comic-type" name="type">
                    <option value="comic book" {{ $comic->type == 'comic book' ? 'selected' : '' }}>Comic Book</option>
                    <option value="graphic novel" {{ $comic->type == 'graphic novel' ? 'selected' : '' }}>Graphic Novel</option>
                </select>
            </div>

            <button type="submit" class="btn btn-warning">Modifica</button>
        </form>
    </div>
@endsection
