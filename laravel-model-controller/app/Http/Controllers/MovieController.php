<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller {
    public function index() {
        $data = [
            "movies" => Movie::all()
        ];
        return view("nomeView", $data);
    }
}
