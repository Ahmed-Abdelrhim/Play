<?php

namespace App\Repositories;

use App\Models\BlogPost;

class BlogPostRepository
{
    public function index()
    {
        return BlogPost::with('author')->get()->map->format();
    }

    public function show($id)
    {
        //        $post = BlogPost::query()->with('comments')->where('id',$id)->firstOr(function(){
        //            return view('errors.404');
        //        })->format();

        $post = BlogPost::query()->where('id',$id)->FirstOr( function() {
            return view('errors.404');
        });
        return view('blogpost.update',['post' => $post]);
    }

    public function update($id , $request)
    {
        $post =  BlogPost::query()->find($id);
        if(!$post)
            return view('errors.404');
        $done = $post->update($request->all());
        $name = auth()->guard('author')->user()->name;
        if ($done)
        {
            session()->flash('success','BlogPost Updated Successfully By ' . $name );
            return redirect('show/'.$id);
        }
    }
}
