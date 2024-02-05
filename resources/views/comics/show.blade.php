@extends('layouts.main')

@section('title')
    Dettaglio Comic - {{ $comic->title }}
@endsection


@section('main')
    <div class="row">
        <div class="col-6 p-4">
            <div class="mb-3">
                <h3>Title: <span>{{ $comic->title }}</span></h3>
            </div>

            <div class="mb-3">
                <h3>Series: <span>{{ $comic->series }}</span></h3>
            </div>

            <div class="mb-3">
                <h3>Price: <span>{{ $comic->price }}$</span></h3>
            </div>

            <h3>Description:</h3>
            <div class="mb-3">{{ $comic->description }}</div>

            <div class="mb-3">
                <h3>Sale Date: <span>{{ $comic->sale_date }}</span></h3>
            </div>
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center">

            <div class="image rounded-3 overflow-hidden">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
            </div>

        </div>
    </div>
@endsection
