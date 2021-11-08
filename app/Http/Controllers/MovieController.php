<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function all() {
        $movies = Movie::all();
        
        return view('index', compact("movies"));
    }
}
