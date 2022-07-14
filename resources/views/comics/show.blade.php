@extends('layouts.base')

@section('page-title')
    {{ $comic->title }}
@endsection

@section('page-content')
    <div class="row py-4">
        <div class="col-3">
            <img src="{{ $comic->thumb }}" class="img-thumbnail" alt="">
        </div>
        <div class="col-9">
            <h1>{{ $comic->title }}</h1>
            <div class="d-flex justify-content-between">
                <p class="fw-bold">{{ $comic->series }}</p>
                <p>{{ date('M d Y', strtotime($comic->sale_date)) }}</p>
            </div>
            <p>{{ $comic->description }}</p>
            <div class="d-flex align-items-center justify-content-between">
                <div class="fw-bold">
                    Prezzo: <span class="fw-normal">${{ $comic->price }}</span>
                </div>
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna ai fumetti</a>
            </div>
        </div>
    </div>
@endsection
