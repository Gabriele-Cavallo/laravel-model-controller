<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    function index() {
        $movie = Movie::all();

        $data = [
            'movie' => $movie
        ];
        
        return view('home', $data);
    }
}
