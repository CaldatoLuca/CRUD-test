@extends('layouts.main')

@section('title')
    Create Comic
@endsection


@section('main')

    <h2>Insert a new comic</h2>

    {{-- //mostro errori se presenti in registrazione --}}
    {{-- se esiste un qualsisi errore ciclo su tutti gli errori e li stampo --}}
    {{-- $errors è una variabile di laravel che vive in ogni sessione - varibile di sessione (si svuota a cambio pagina) --}}
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

    {{-- form con rotta verso store in post
    i name nei form devono essere uguali a quelli nel db e rispettare le prorietà date nella migration --}}
    <form action="{{ route('comics.store') }}" method="POST" class="h-100">

        {{-- chiave di laravel per controllo --}}
        @csrf

        {{-- titolo --}}
        <div class="mb-3">
            <label for="comic-title" class="form-label">Comic Title</label>
            <div class="input-group">
                {{-- input --}}
                {{-- do classe is-invalid se ho erroe su title --}}
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="comic-title"
                    aria-describedby="basic-addon3 basic-addon4" name="title" required>
            </div>
            {{-- errore titolo --}}
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- url immagine --}}
        <div class="mb-3">
            <label for="comic-img" class="form-label">Comic Image Url</label>
            <div class="input-group">
                {{-- input --}}
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="comic-img"
                    aria-describedby="basic-addon3 basic-addon4" name="thumb" required>
            </div>
            {{-- errore url immagine --}}
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-text" id="basic-addon4">Insert all the url</div>
        </div>

        {{-- prezzo --}}
        <div class="mb-3">
            <label for="comic-price" class="form-label">Comic Price</label>
            <div class="input-group">
                {{-- input --}}
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="comic-price"
                    aria-describedby="basic-addon3 basic-addon4" name="price" required>
            </div>
            {{-- errore prezzo --}}
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-text" id="basic-addon4">Inserti only the number ex. 34.90</div>
        </div>

        {{-- serie --}}
        <div class="mb-3">
            <label for="comic-series" class="form-label">Comic Series</label>
            <div class="input-group">
                {{-- input --}}
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="comic-series"
                    aria-describedby="basic-addon3 basic-addon4" name="series" required>
            </div>
            {{-- errore serie --}}
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- data di inizio vendita --}}
        <div class="mb-3">
            <label for="comic-sale-date" class="form-label">Comic Sale Date</label>
            <div class="input-group">
                {{-- input --}}
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="comic-sale-date"
                    aria-describedby="basic-addon3 basic-addon4" name="sale_date" required>
            </div>
            {{-- errore data inizio vendita --}}
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-text" id="basic-addon4">Example: 2024-11-08 YYYY-MM-DD</div>
        </div>

        {{-- tipo --}}
        <div class="mb-3">
            <label for="comic-type" class="form-label">Comic Type</label>
            <div class="input-group">
                {{-- input --}}
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="comic-type"
                    aria-describedby="basic-addon3 basic-addon4" name="type" required>
            </div>
            {{-- errore tipo --}}
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- descrizione --}}
        <div class="mb-3">
            <label for="comic-description" class="form-label">Comic Description</label>
            <div class="input-group">
                {{-- input --}}
                <textarea class="form-control @error('description') is-invalid @enderror" cols="30" rows="10"
                    id="comic-description" aria-label="With textarea" name="description" required></textarea>
            </div>
            {{-- errore descrizione --}}
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
