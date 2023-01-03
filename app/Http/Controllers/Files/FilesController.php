<?php

namespace App\Http\Controllers\Files;

use App\Exports\UserExport;
use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Maatwebsite\Excel\Facades\Excel;

class FilesController extends Controller
{
    public function export(): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        return Excel::download(new UserExport, 'authors.xlsx');
    }

    public function subMonth(): string
    {
        $author = Auth::guard('author')->user();
        $created_at = $author->created_at;
        $updated_at = $author->updated_at;


        $takeOff = '09:13:03';
        $landing = '17:13:02';

        $t1 = strtotime($takeOff);
        $t2 = strtotime($landing);

        return $diff = gmdate('H:i', $t2 - $t1) . ' Mins';

        //        $t1 = strtotime($created_at);
        //        $t2 = strtotime($updated_at);
        //
        //        return $diff = gmdate('H:i', $t2 - $t1);


        // return $created_at->diffInDays($updated_at, false) . ' Days';
        // return $updated_at - $created_at;
        // 32CBTLq8dSSJqM8


    }

    public function PlayWithImages()
    {
        $image = public_path('profiles/' . auth()->guard('author')->user()->avatar);
        $src = substr($image,28);

        // return $image;
        //        if (!$image)
        //            return 'Not Found';
        //        return $image;
        //        $img = Image::make(public_path('public/profiles/'.auth()->guard('author')->user()->avatar));
        $img = Image::make('/storage/app/public/profiles/'.auth()->guard('author')->user()->avatar);
        //        $img->resize(320,400);
        //        return $img->response('jpg');

    }

    public function methodName()
    {
        //  TODO: let's play here for a while
        // You Nay Like It .
        // Time With Seconds .
        // Time With Seconds .
        // To Be Paid At The End Of The Week .
        //
    }
}
