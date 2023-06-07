@extends('layout.main')

@section('title')
  Movie List
@endsection

@section('content')
  <main>
    <div class="pg-table-wrapper h-100 d-flex justify-content-center align-items-center py-5">
      <div class="container">
        <h2 class="text-center">Lista dei film!</h2>
        <div class="row row-cols-5">
          @foreach ($movies as $movie)
            <div class="col mt-5">
              <div class="card h-100">
                <img src="{{$movie->src}}" class="card-img-top h-75 object-fit-cover" alt="">
                <div class="card-body d-flex flex-column justify-content-between">
                  <h5 class="card-title pg-title mb-3">{{$movie->title}}</h5>

                  <div class="pg-button-container text-center mt-5">
                    <a href="{{route('film_info', ['id' => $movie->id])}}" class="btn btn-primary">Dettagli</a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </main>
@endsection
