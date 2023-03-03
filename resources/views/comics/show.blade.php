@extends('layouts.app')

@section('title', $comic->title)

@section('content')
<main>
    <div class="container">
    <h1 class="text-center p-2">{{ $comic->title }}</h1>
    <div class="comic-show d-flex align-items-center justify-content-between py-5">
        <div class="comic">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
        </div>
        <div class="description ps-4">
            <p>{{ $comic->description }}</p>
            <div class="add-comic d-flex justify-content-center">
                <a href="{{ route('comics.index') }}" class="btn-add my-4 btn btn-small btn-primary">
                    <div class="btn-text">
                        <span>Go back</span>
                    </div>
                </a>
            </div>
                <div class="edit-comic d-flex justify-content-center">
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn-add mb-5 btn btn-small btn-primary">Edit comic</a>
                </div>
            </div>
        </div>
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger mb-5">Delete Comic</button>
                </form>
    </div>
    </div>
  </main>
@endsection