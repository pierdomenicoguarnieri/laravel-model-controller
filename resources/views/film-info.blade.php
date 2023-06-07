@extends('layout.main')

@section('title')
  {{$movie->title}}
@endsection

@section('content')
  <main>
    <div class="pg-card-wrapper h-100 d-flex justify-content-center align-items-center overflow-x-scroll">
      <div class="card">
        <img src="{{$movie->src}}" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">{{$movie->title}}</h5>
          <p class="card-text">{{$movie->original_title}}</p>
          <p class="card-text">Lingua: {{$movie->nationality}}</p>
          <p class="card-text">Voto: {{$movie->vote}}/10</p>
          <a href="{{route('movies')}}" class="btn btn-primary">Torna alla lista dei film</a>
        </div>
      </div>
    </div>
  </main>
@endsection
