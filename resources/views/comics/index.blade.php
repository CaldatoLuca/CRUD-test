@extends('layouts.main')

@section('title')
    Lista DC Comics
@endsection


@section('main')
    <h2>Your comics list</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col">Price</th>
                <th scope="col">Sale Date</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->price }}$</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td><a href="{{ route('comics.show', $comic->id) }}">View Details</a></td>
                    <td><a href="{{ route('comics.edit', $comic->id) }}">Edit</a></td>
                    <td>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf

                            {{-- aggiungo il metodo delete --}}
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
