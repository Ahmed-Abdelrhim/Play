<?php

namespace App\Http\Controllers;

use App\Http\Requests\Requests\BlogPostRequest;
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

    public function play($id)
    {
        $author = Auth::guard('author')->user();
        $this->authorize('posts.play',$id);
        return 'Completed Success';
        //return Auth::guard('author')->user();
        //if (Auth::guard('author')->check())
        //    return 'true';
        // return 'false';
        //return BlogPost::onlyTrashed()->restore();
        // قَالَ يَبْنَؤُمَّ لَا تَأْخُذْ بِلِحْيَتِى وَلَا بِرَأْسِىٓ ۖ إِنِّى خَشِيتُ أَن تَقُولَ فَرَّقْتَ بَيْنَ بَنِىٓ إِسْرَٰٓءِيلَ وَلَمْ تَرْقُبْ قَوْلِى
        //۞ إِنَّ ٱللَّهَ يَأْمُرُكُمْ أَن تُؤَدُّوا۟ ٱلْأَمَٰنَٰتِ إِلَىٰٓ أَهْلِهَا وَإِذَا حَكَمْتُم بَيْنَ ٱلنَّاسِ أَن تَحْكُمُوا۟ بِٱلْعَدْلِ ۚ إِنَّ ٱللَّهَ نِعِمَّا يَعِظُكُم بِهِۦٓ ۗ إِنَّ ٱللَّهَ كَانَ سَمِيعًۢا بَصِيرًۭا
    }
// showBlogPostForm
    public function showBlogPostForm()
    {
        $this->authorize('posts.create');
        return view('blogpost.create');
    }

    public function addBlogPost(BlogPostRequest $request)
    {
        $id = Auth::guard('author')->user()->id;
        BlogPost::create([
            'title' => $request->input('title'),
            'content' =>$request->input('content'),
            'author_id' => $id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $request->session()->flash('success' ,'BlogPost Inserted Successfully');
        return redirect()->back();
    }

    public function showAllPosts()
    {
        return view('blogpost.posts', ['posts' => BlogPost::withCount('comments')->get()]);
    }

    public function updateBlogPost($id)
    {
        $post = BlogPost::findOrFail($id);
        $author = Auth::guard('author')->user();
        // return 'Post Author ID: ' .$post->author_id . '<br> Currently Authenticated User ID: '.$author->id;

//        if (!Gate::allows('update-blogPost', $post)) {
//            // abort(403);
//            return 'Not Allowed To Edit Or Delete This Post';
//        }
        $this->authorize('update', $post);

        // if(Gate::denies('update-blogPost',$author,$post))
        //    return 'You Not Are Allowed To Edit Or Delete This Post';
        return 'You Are Allowed To Edit & Update This Post';
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
        $this->authorize('delete', $post);
        return 'You Are Allowed To Delete This BlogPost';
        // $post->delete();
        //it will go the model and run the boot function
    }

    public function restoreBlogPosts($id)
    {
        BlogPost::onlyTrashed()->findOrFail($id)->restore();
        return 'BlogPost And Comments Are Restored Successfully';
    }

}
