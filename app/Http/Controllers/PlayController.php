<?php

namespace App\Http\Controllers;

use App\Http\Requests\Requests\BlogPostRequest;
use App\Models\Comment;
use App\Models\Currency;
use App\Models\PaymentPlatform;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\Author;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PlayController extends Controller
{
    public function showPosts($id)
    {
        $post = BlogPost::find($id);
        if (!$post)
            return 'BlogPost Not Found';
        return $post->comments()->get();

//        (new Carbon\Carbon() )
//        return Carbon::createFromDate($post->createdt_at)->diffForHumans();
//        $author = Author::findOrFail($id);
        //return $author->post()->get();
//        return $author->with('posts')->first();
    }

    public function play($id)
    {
        $author = Auth::guard('author')->user();
        $post = BlogPost::find(1);

        if (!Gate::allows('play', $id))
            return 'No';
        return 'Completed Success';
        // $this->authorize('update',$post);
        //$this->authorize('play',$id);


        //return Auth::guard('author')->user();
        //if (Auth::guard('author')->check())
        //    return 'true';
        //return 'false';
        //return BlogPost::onlyTrashed()->restore();
        // قَالَ يَبْنَؤُمَّ لَا تَأْخُذْ بِلِحْيَتِى وَلَا بِرَأْسِىٓ ۖ إِنِّى خَشِيتُ أَن تَقُولَ فَرَّقْتَ بَيْنَ بَنِىٓ إِسْرَٰٓءِيلَ وَلَمْ تَرْقُبْ قَوْلِى
        //۞ إِنَّ ٱللَّهَ يَأْمُرُكُمْ أَن تُؤَدُّوا۟ ٱلْأَمَٰنَٰتِ إِلَىٰٓ أَهْلِهَا وَإِذَا حَكَمْتُم بَيْنَ ٱلنَّاسِ أَن تَحْكُمُوا۟ بِٱلْعَدْلِ ۚ إِنَّ ٱللَّهَ نِعِمَّا يَعِظُكُم بِهِۦٓ ۗ إِنَّ ٱللَّهَ كَانَ سَمِيعًۢا بَصِيرًۭا
    }

    public function showBlogPostForm()
    {
        $this->authorize('posts.create');
        return view('blogpost.create');
    }

    public function addBlogPost(BlogPostRequest $request): \Illuminate\Http\RedirectResponse
    {
        $id = Auth::guard('author')->user()->id;
        BlogPost::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'author_id' => $id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $request->session()->flash('success', 'BlogPost Inserted Successfully');
        return redirect()->back();
    }

    public function showAllPosts()
    {
        // return BlogPost::mostCommented()->take(6)->get();
        return view('blogpost.posts', ['posts' => BlogPost::withCount('comments')->get(), 'mostCommented' => BlogPost::mostCommented()]);
    }

    public function updateBlogPostForm($id)
    {
        $post = BlogPost::findOrFail($id);
        $author = Auth::guard('author')->user();
        // return 'Post Author ID: ' .$post->author_id . '<br> Currently Authenticated User ID: '.$author->id;

//        if (!Gate::allows('update-blogPost', $post)) {
//            // abort(403);
//            return 'Not Allowed To Edit Or Delete This Post';
//        }


        // $this->authorize('update', $post);

        if (!Gate::allows('update-blog_post', $post))
            return 'You are not allowed to update this blog post';

        // if(Gate::denies('update-blogPost',$author,$post))
        //    return 'You Not Are Allowed To Edit Or Delete This Post';
        return view('blogpost.update', ['post' => $post]);
        // return view('blogpost.update', compact('post'));
    }

    public function storeBlogPost($id, Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:4',
            'content' => 'required|string|min:8',
        ]);
        $blog_post = BlogPost::find($id);
        if (!$blog_post)
            return 'BlogPost Not Found To Be Updated';
        $blog_post->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'updated' => now(),
        ]);
        return redirect()->back()->with(['success' => 'BlogPost Updated Successfully']);
    }

    public function destroy($id)
    {
        $post = BlogPost::find($id);
        if(!$post)
            return 'post not found';
        $this->authorize('delete', $post);
        $done = $post->delete();
        if ($done)
            session()->flash('success', 'Post Deleted Successfully');
        return redirect()->route('upload.form');
        // return 'You Are Allowed To Delete This BlogPost';
        // $post->delete();
        //it will go the model and run the boot function
    }

    public function restoreBlogPosts($id)
    {
        BlogPost::onlyTrashed()->findOrFail($id)->restore();
        return 'BlogPost And Comments Are Restored Successfully';
    }


    public function activeLastMonthAuthor()
    {
        $authors = Author::mostActive()->take(5)->get();
        return view('blogpost.authors', ['authors' => $authors]);
    }

    public function uploadForm()
    {
        return view('upload');
    }

    public function upload(Request $request): \Illuminate\Http\RedirectResponse
    {
        $image_name = time() . '.' . $request->file('image')->guessExtension();
        $name = $request->file('image')->storeAs('thumbnails', $image_name);
        $blogPost = BlogPost::find(11);
        $done = $blogPost->images()->create([
            'src' => $name,
            'type' => 'image'
        ]);
        if ($done)
            session()->flash('success', 'Image Uploaded Successfully');
        return redirect()->back();
        // dd(Storage::url($name));
    }

}
