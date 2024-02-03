@extends('layouts.main')

@section('title')
    Lista DC Comics
@endsection


@section('main')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col">Price</th>
                <th scope="col">Sale Date</th>
                <th scope="col">View Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->price }}$</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td><a href="{{ route('comics.show', $comic->id) }}">Click Here</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
