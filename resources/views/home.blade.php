@extends('layout.main')

@section('title')
  Homepage
@endsection

@section('content')
  <main>
    <div class="pg-main-wrapper h-100 d-flex flex-column justify-content-center align-items-center">
      <h1 class="mb-4">Benvenuto nella Movie Boolist!</h1>

      <p>Forniamo un database di film con i loro dettagli.</p>

      <a href="{{route('movies')}}"><button type="button" class="btn btn-light mt-5">Vai alla lista</button></a>
    </div>
  </main>
@endsection
