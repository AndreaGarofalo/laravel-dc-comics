@extends('layouts.app')

@section('title', 'Add Comic')

@section('content')
  <main>
    <div class="container">
    <div class="title-create d-flex justify-content-between align-items-center">
        <h1 class="text-center">Forge your comic</h1>
    </div>
    <div class="form-create">
        <form method="POST" action="{{ route('comics.update', $comic->id) }}">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" class="form-control" id="title" placeholder="Title"
                            name="title" required value="{{ old('title', $comic->title) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb:</label>
                        <input type="url" class="form-control" id="thumb" placeholder="Thumb"
                            name="thumb" required value="{{ old('thumb', $comic->thumb) }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Descriprion:</label>
                        <textarea name="description" id="description" cols="30" class="form-control">{!! old('description', $comic->description) !!}"</textarea>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="text" min="0" class="form-control" id="price"
                            placeholder="Price" name="price" value="{{ old('price', $comic->price) }}">
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="series" class="form-label">Series:</label>
                        <input type="text" class="form-control" id="series" placeholder="Series"
                            name="series" value="{{ old('series', $comic->series) }}">
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Date:</label>
                        <input type="date" class="form-control" id="sale_date" pattern="\d{4}-\d{2}-\d{2}"
                            placeholder="YYYY-MM-DD" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="type" class="form-label">Genre:</label>
                        <input type="text" class="form-control" value="Azione" id="type"
                            placeholder="Genre" name="type" value="{{ old('type', $comic->type) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artists:</label>
                        <input type="text" class="form-control" id="artists" placeholder="Artists"
                            name="artists" value="{{ old('artists', $comic->artists) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Writers:</label>
                        <input type="text" class="form-control" id="writers" placeholder="Writer"
                            name="writers" value="{{ old('writers', $comic->writers) }}">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center p-5">
                <button type="submit" class="btn px-5 border-white btn-primary">Save</button>
            </div>
        </form>
                <div class="btn-text">
                    <a href="{{ route('comics.index') }}" class="btn-add my-4 btn btn-small btn-primary">
                    <span>Back</span>
            </a>
        </div>
    </div>
  </div>
</main>
@endsection
