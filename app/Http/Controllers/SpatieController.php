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

    public function download()
    {
        $user = auth()->guard('author')->user();
        return $user->getFirstMedia('images');
            //->toMediaCollection();
    }

    public function downloadImageProfile()
    {
        return $user = auth()->guard('author')->user();
        return auth()->guard('author')->user()->getFirstMedia('images');
    }
}
