@extends('layouts.main')

@section('title')
    Lista DC Comics
@endsection


@section('main')
    <h1>Main Index</h1>
    @foreach ($comics as $comic)
        <div>{{ $comic->title }}</div>
    @endforeach
@endsection
