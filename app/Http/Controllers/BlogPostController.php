<?php

namespace App\Http\Controllers;

use App\Repositories\BlogPostRepository;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{

    public $postRepo;

    public function __construct(BlogPostRepository $postRepo)
    {
        $this->postRepo = $postRepo;
    }

    public function index()
    {
        return $this->postRepo->index();
    }

    public function show($id)
    {
        return $this->postRepo->show($id);
    }

    public function update($id , Request $request)
    {
        return $this->postRepo->update($id , $request);
    }
}
