<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index(){
    return view('home');
  }

  public function movies(){
    $movies = Movie::all();
    return view('movies', compact('movies'));
  }

  public function contacts(){
    return view('contacts');
  }

  public function film_infos($id){
    $movie = Movie::find($id);
    if($movie === null) abort(404);
    return view('film-info', compact('movie'));
  }
}
