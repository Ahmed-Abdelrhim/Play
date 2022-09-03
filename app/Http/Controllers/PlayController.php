<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\Author;

class PlayController extends Controller
{
    public function showPosts($id)
    {
        $author = Author::findOrFail($id);
        //return $author->post()->get();
        return $author->with('posts')->first();
    }

    public function play()
    {
        return BlogPost::onlyTrashed()->restore();
    }

    public function showAllPosts()
    {
        return BlogPost::withCount('comments')->get();
    }

    public function destroy($id)
    {
        $post = BlogPost::findOrFail($id);
        $post->delete();
        //it will go the model and run the boot function
    }

    public function restoreBlogPosts($id)
    {
        BlogPost::onlyTrashed()->findOrFail($id)->restore();
        return 'BlogPost And Comments Are Restored Successfully';
    }

}
