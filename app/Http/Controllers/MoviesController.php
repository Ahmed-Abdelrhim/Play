<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    public string $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI3MDVkMjU4ZDQxMWE2MzVjMDIyZjYyOWEwMzI0YjkxNSIsInN1YiI6IjYyMWMxOWQzMmZhZjRkMDA0MzdiOTQwOSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.TmXbQbpSqB2LWNX-fpivUi8mBaQvewaLKEoJr_tIxZM';

    public function index(): Factory|View|Application
    {
        $token = env('MOVIE_TOKEN');
        $uri = 'https://api.themoviedb.org/3/movie/popular';
        $movies = Http::withToken($this->token)->get($uri)->json()['results'];
        return view('movies.index',['movies' => $movies]);
    }

    public function showMovie($id)
    {
        $uri = 'https://api.themoviedb.org/3/movie/'.$id;
        return $movie = Http::withToken($this->token)->get($uri)->json();
    }
}
