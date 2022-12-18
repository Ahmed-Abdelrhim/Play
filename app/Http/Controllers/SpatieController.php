<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SpatieController extends Controller
{
    public function handle()
    {
        return $author = Auth::guard('author')->user()->getMedia('images');
//        return count($author);
//        if (count($author) > 0)
//            return 'Yes';
//        return 'No';
        // return $avatars = $author->getMedia();
        // return view('spatie.index',['avatars' => $avatars]);
    }
}
