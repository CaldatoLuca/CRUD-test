@extends('layouts.main')

@section('title')
    Dettaglio Comic - {{ $comic->title }}
@endsection


@section('main')
    <h1>Main Show</h1>
    <div>{{ $comic->title }}</div>
    <br>

    <div>{{ $comic->series }}</div>
    <br>

    <div>{{ $comic->price }}</div>
    <br>

    <div>{{ $comic->description }}</div>
    <br>

    <div>{{ $comic->sale_date }}</div>
@endsection
