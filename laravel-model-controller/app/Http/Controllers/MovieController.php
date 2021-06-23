<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller {
    public function index() {
        $moviesData = Movie::all();

        $dataView = [
            "moviesList" => $moviesData,
        ];
        return view("welcome", $dataView);
    }
}
