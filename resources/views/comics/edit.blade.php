@extends('layouts.main')

@section('title')
    Edit Comic
@endsection


@section('main')
    <h2>Edit: {{ $comic->title }}</h2>

    {{-- visualizzazione errori --}}
    @if ($errors->any())
        <h3 class="text-danger">Something went wrong</h3>
        <div class="alert alert-danger">
            <ul class="list-group mb-0 ">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item bg-danger-subtle border-0">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- form con rotta verso update in post ma usiamo @method per il metodo giusto put
    i quasi stesso form del create, nei value metto i valori del comic, per textarea no value ma testo --}}
    {{-- la rotta avrà anche bisogno dell' id, totta parametrica --}}
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">

        {{-- chiave di laravel per controllo --}}
        @csrf

        {{-- aggiungiamo il metodo put --}}
        @method('PUT')

        {{-- nel value uso sempre old per tenere il testo scritto in caso di valizione errata ma do come deafaul il valore del campo da editare --}}
        {{-- titolo --}}
        <div class="mb-3">
            <label for="comic-title" class="form-label">Comic Title</label>
            <div class="input-group">
                {{-- input --}}
                <input type="text" class="form-control" id="comic-title" aria-describedby="basic-addon3 basic-addon4"
                    name="title" value="{{ old('title', $comic->title) }}" required>
            </div>
        </div>

        {{-- url immagine --}}
        <div class="mb-3">
            <label for="comic-img" class="form-label">Comic Image Url</label>
            <div class="input-group">
                {{-- input --}}
                <input type="text" class="form-control" id="comic-img" aria-describedby="basic-addon3 basic-addon4"
                    name="thumb" value="{{ old('thumb', $comic->thumb) }}" required>
            </div>
            <div class="form-text" id="basic-addon4">Insert all the url</div>
        </div>

        {{-- prezzo --}}
        <div class="mb-3">
            <label for="comic-price" class="form-label">Comic Price</label>
            <div class="input-group">
                {{-- input --}}
                <input type="text" class="form-control" id="comic-price" aria-describedby="basic-addon3 basic-addon4"
                    name="price" value="{{ old('price', $comic->price) }}" required>
            </div>
            <div class="form-text" id="basic-addon4">Inserti only the number ex. 34.90</div>
        </div>

        {{-- serie --}}
        <div class="mb-3">
            <label for="comic-series" class="form-label">Comic Series</label>
            <div class="input-group">
                {{-- input --}}
                <input type="text" class="form-control" id="comic-series" aria-describedby="basic-addon3 basic-addon4"
                    name="series" value="{{ old('series', $comic->series) }}" required>
            </div>
        </div>

        {{-- data vendita --}}
        <div class="mb-3">
            <label for="comic-sale-date" class="form-label">Comic Sale Date</label>
            <div class="input-group">
                {{-- input --}}
                <input type="text" class="form-control" id="comic-sale-date" aria-describedby="basic-addon3 basic-addon4"
                    name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" required>
            </div>
            <div class="form-text" id="basic-addon4">Example: 2024-11-08 YYYY-MM-DD</div>
        </div>

        {{-- type --}}
        <div class="mb-3">
            <label for="comic-type" class="form-label">Comic Type</label>
            <div class="input-group">
                {{-- input --}}
                <input type="text" class="form-control" id="comic-type" aria-describedby="basic-addon3 basic-addon4"
                    name="type" value="{{ old('type', $comic->type) }}" required>
            </div>
        </div>

        {{-- descrizione --}}
        <div class="mb-3">
            <label for="comic-description" class="form-label">Comic Description</label>
            <div class="input-group">
                {{-- input --}}
                <textarea class="form-control" cols="30" rows="10" id="comic-description" aria-label="With textarea"
                    name="description" required>{{ old('description', $comic->description) }}</textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit Changes</button>
    </form>
@endsection
