@extends('layouts.base')

@section('page-title')
    Comics
@endsection

@section('page-content')
    <div class="row gy-4 py-4">
        @foreach($comics as $comic)
            <div class="col-3 d-flex align-items-stretch">
                <div class="card">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <p class="card-text text-truncate">{{ $comic->description }}</p>

                        <div class="d-flex gap-2 mt-auto">
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Mostra Dettagli</a>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modifica</a>
                        </div>

                        <form class="mt-2" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Cancella">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
