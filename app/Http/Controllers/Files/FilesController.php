<?php

namespace App\Http\Controllers\Files;

use App\Exports\UserExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    }
}
