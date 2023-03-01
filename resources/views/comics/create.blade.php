@extends('layouts.app')

@section('title', 'Forge')

@section('content')
<main>
    <div class="container">
    <div class="title-create d-flex justify-content-between align-items-center">
        <h1 class="text-center my-5">Forge your comic</h1>
    </div>
    <div class="form-create text-light">
        <form method="POST" action="{{ route('comics.store') }}">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" class="form-control" id="title" placeholder="Title"
                            name="title" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Cover:</label>
                        <input type="url" class="form-control" id="thumb" placeholder="Cover"
                            name="thumb" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea name="description" id="description" cols="30" class="form-control"
                            placeholder="Description"></textarea>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="text" min="0" max="50" value="5" class="form-control" id="price"
                            placeholder="price" name="price">
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="series" class="form-label">Series:</label>
                        <input type="text" class="form-control" id="series" placeholder="Series"
                            name="series">
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Date:</label>
                        <input type="date" class="form-control" id="sale_date" pattern="\d{4}-\d{2}-\d{2}"
                            placeholder="YYYY-MM-DD" name="sale_date">
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="type" class="form-label">Genre:</label>
                        <input type="text" class="form-control" value="Action" id="type" name="type">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artists:</label>
                        <input type="text" class="form-control" id="artists" placeholder="Artists"
                            name="artists">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Writers:</label>
                        <input type="text" class="form-control" id="writers" placeholder="Writers"
                            name="writers">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center p-5">
                <button type="submit" class="btn px-5 btn-primary">INVIA</button>
            </div>
        </form>
    </div>
    <a href="{{ route('comics.index') }}" class="btn-add mb-5 btn btn-small btn-primary">
        <div class="btn-text">
            <p class="m-0">Go back</p>
        </div>
    </a>
    </div>
</main>
@endsection