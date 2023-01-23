<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
// use GuzzleHttp\Psr7\Request;


class MoviesController extends Controller
{
    public string $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI3MDVkMjU4ZDQxMWE2MzVjMDIyZjYyOWEwMzI0YjkxNSIsInN1YiI6IjYyMWMxOWQzMmZhZjRkMDA0MzdiOTQwOSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.TmXbQbpSqB2LWNX-fpivUi8mBaQvewaLKEoJr_tIxZM';

    public function PlayingWithBlogPosts(Request $request)
    {
        return $request;
        $post = BlogPost::query()->findOrFail($request->get('post'));

        return $request;
    }
    public function index()
    {
        return $posts = BlogPost::query()->get(['id','title','author_id']);
        return view('s3',['posts' => $posts]);
        //        $token = env('MOVIE_TOKEN');
        //        $uri = 'https://api.themoviedb.org/3/movie/popular';
        //
        //
        //        $headers = [
        //            'Content-Type' => 'application/json',
        //            'authorization' => 'Bearer ' . $this->token
        //        ];
        //        $client_request = new Client;
        //
        //        $request = new Request('GET', $uri, $headers);
        //
        //        $response = $client_request->send($request);
        //        $response->getBody();
        //
        //
        //        // return $movies = Http::withToken($this->token)->get($uri)->json()['results'];
        //        return view('movies.index', ['movies' => $response->getBody()]);
    }

    public function showMovie($id)
    {
        $uri = 'https://api.themoviedb.org/3/movie/' . $id;
        return $movie = Http::withToken($this->token)->get($uri)->json();
    }

    public function playWithData()
    {

    }
}
