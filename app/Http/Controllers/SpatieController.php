<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpatieController extends Controller
{
    public function handle()
    {
        return $author = auth()->guard('author')->user()->getMedia();
        return $avatars = $author->getMedia();
        return view('spatie.index',['avatars' => $avatars]);
    }
}
