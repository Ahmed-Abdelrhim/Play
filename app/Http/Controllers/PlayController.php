<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\Author;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PlayController extends Controller
{
    public function showPosts($id)
    {
        $post = BlogPost::findOrFail($id);
//        (new Carbon\Carbon() )
        return Carbon::createFromDate($post->createdt_at)->diffForHumans();
        $author = Author::findOrFail($id);
        //return $author->post()->get();
        return $author->with('posts')->first();
    }

    public function play()
    {
        //return Auth::guard('author')->user();
        if (Auth::guard('author')->check())
            return 'true';
        return 'false';
        //return BlogPost::onlyTrashed()->restore();
    }

    public function showAllPosts()
    {
        return view('blogpost.posts', ['posts' => BlogPost::withCount('comments')->get()]);
    }

    public function updateBlogPost($id)
    {
        $post = BlogPost::findOrFail($id);
        $author = Auth::guard('author')->user();
        $this->authorize('update-blogpost',[$author,$post]);
//        if(Gate::denies('update-blogPost',$author,$post))
//            return 'You Not Are Allowed To Edit Or Delete This Post';
        return 'You  Are Allowed To Edit Or Delete This Post';
        // return view('blogpost.update', compact('post'));
    }

    public function storeBlogPost($id, Request $request)
    {
        return $request;
        //$post = BlogPost::findOrFail($id);

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
