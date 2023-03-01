@extends('layouts.app')

@section('title', 'Comics')

@section('content')
  <main>
    <div class="container">
      <div class="cards-row">
        @foreach($comics as $comic)
        <div class="card-col">
          <figure>
            <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}" />
          </figure>
          <figcaption>
            <a href="{{ route('comics.show', $comic->id) }}">
              <h6 class="text-center">{{ $comic->title }}</h6>
            </a>
          </figcaption>
        </div>
        @endforeach
      </div>
        <div class="add-comic d-flex justify-content-center">
        <a href="{{ route('comics.create') }}" class="btn-add mb-5 btn btn-small btn-primary">Forge a new comic</a>
    </div>
    </div>
  </main>
@endsection