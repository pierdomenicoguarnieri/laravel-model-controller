@extends('layout.main')

@section('title')
  Movie List
@endsection

@section('content')
  <main>
    <div class="pg-table-wrapper h-100 d-flex justify-content-center align-items-center overflow-x-scroll">
      <div class="container">
        <h2 class="mb-4">Lista dei film!</h2>
        <table class="table align-middle">
          <thead>
            <tr>
              <th scope="col">#ID</th>
              <th scope="col">Titolo</th>
              <th scope="col">Lingua</th>
              <th scope="col">Data di uscita</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($movies as $movie)
              <tr class="py-2">
                <th scope="row">{{$movie->id}}</th>
                <td>{{$movie->title}}</td>
                <td>{{$movie->nationality}}</td>
                <td>{{$movie->date}}</td>
                <td><a href="{{route('film_info', ['id' => $movie->id])}}"><button type="button" class="btn btn-primary">Dettagli</button></a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </main>
@endsection
