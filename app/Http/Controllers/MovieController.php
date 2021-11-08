<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index() 
    {
        $movies= Movie::all();

        return view('index', compact('movies'));
    }

    public function singleMovie($id)
    {
        $film = Movie::find($id);

        return view('film', compact('film'));
    }
}
