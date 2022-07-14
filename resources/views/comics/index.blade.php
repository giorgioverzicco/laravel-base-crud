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
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary mt-auto">Mostra Dettagli</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
