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
            <h6 class="text-center">{{ $comic->title }}</h6>
          </figcaption>
        </div>
        @endforeach
      </div>
    </div>
  </main>

@endsection