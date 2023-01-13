<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    public function index()
    {
        $token = env('MOVIE_TOKEN');
        $uri = 'https://api.themoviedb.org/3/movie/popular';
        $movies = Http::withToken($this->token)->get($uri)->json()['results'];
        return view('movies.index',['movies' => $movies]);
    }

    public function showMovie($id)
    {

    }
}
