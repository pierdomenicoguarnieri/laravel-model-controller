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
    return view('movies');
  }

  public function contacts(){
    return view('contacts');
  }
}
