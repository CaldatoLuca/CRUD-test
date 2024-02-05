@extends('layouts.main')

@section('title')
    Create Comic
@endsection


@section('main')
    <h2>Insert a new comic</h2>

    {{-- form con rotta verso store in post
    i name nei form devono essere uguali a quelli nel db e rispettare le prorietà date nella migration --}}
    <form action="{{ route('comics.store') }}" method="POST" class="h-100">

        {{-- chiave di laravel per controllo --}}
        @csrf

        <div class="mb-3">
            <label for="comic-title" class="form-label">Comic Title</label>
            <div class="input-group">
                <input type="text" class="form-control" id="comic-title" aria-describedby="basic-addon3 basic-addon4"
                    name="title">
            </div>
        </div>

        <div class="mb-3">
            <label for="comic-img" class="form-label">Comic Image Url</label>
            <div class="input-group">
                <input type="text" class="form-control" id="comic-img" aria-describedby="basic-addon3 basic-addon4"
                    name="thumb">
            </div>
            <div class="form-text" id="basic-addon4">Insert all the url</div>
        </div>

        <div class="mb-3">
            <label for="comic-price" class="form-label">Comic Price</label>
            <div class="input-group">
                <input type="text" class="form-control" id="comic-price" aria-describedby="basic-addon3 basic-addon4"
                    name="price">
            </div>
            <div class="form-text" id="basic-addon4">Inserti only the number ex. 34.90</div>
        </div>

        <div class="mb-3">
            <label for="comic-series" class="form-label">Comic Series</label>
            <div class="input-group">
                <input type="text" class="form-control" id="comic-series" aria-describedby="basic-addon3 basic-addon4"
                    name="series">
            </div>
        </div>

        <div class="mb-3">
            <label for="comic-sale-date" class="form-label">Comic Sale Date</label>
            <div class="input-group">
                <input type="text" class="form-control" id="comic-sale-date" aria-describedby="basic-addon3 basic-addon4"
                    name="sale_date">
            </div>
            <div class="form-text" id="basic-addon4">Example: 2024-11-08 YYYY-MM-DD</div>
        </div>

        <div class="mb-3">
            <label for="comic-type" class="form-label">Comic Type</label>
            <div class="input-group">
                <input type="text" class="form-control" id="comic-type" aria-describedby="basic-addon3 basic-addon4"
                    name="type">
            </div>
        </div>

        <div class="mb-3">
            <label for="comic-description" class="form-label">Comic Description</label>
            <div class="input-group">
                <textarea class="form-control" cols="30" rows="10" id="comic-description" aria-label="With textarea"
                    name="description"></textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
