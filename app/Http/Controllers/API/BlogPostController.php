<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    use BlogPostTrait;
    public function index()
    {
        $posts = BlogPost::all();
        return $this->apiResponse($posts,200,'success');
    }
}
