<?php

namespace App\Http\Controllers\Files;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function uploadForm(): View
    {
        return view('files.images');
    }

    public function uploadMultipleImages(Request $request)
    {
//        return uniqid('',false);
//        $images = [];
//
//        foreach($request->images as $image  ) {
//            $image_name = uniqid('',);
//
//            $images[] .= $image;
//        }
//        return $images;
    }
}
