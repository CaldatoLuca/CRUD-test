@extends('layouts.main')

@section('title')
    Dettaglio Comic - {{ $comic->title }}
@endsection


@section('main')
    <h1>{{ $comic->title }}</h1>

    <div>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    </div>

    <h2>Series</h2>
    <div>{{ $comic->series }}</div>

    <h2>Price</h2>
    <div>{{ $comic->price }}$</div>

    <h2>Description</h2>
    <div>{{ $comic->description }}</div>
    <br>

    <h2>Sale Date</h2>
    <div>{{ $comic->sale_date }}</div>
@endsection
