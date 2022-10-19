<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\BlogPostRequest;
use App\Http\Resources\BlogPostResource;
use App\Models\Author;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BlogPostController extends Controller
{
    use BlogPostTrait;

    public function index()
    {
        $posts = BlogPost::all();
        return $this->apiResponse($posts, 200, 'Success');
    }

    public function show($id)
    {
        $post = BlogPost::find($id);
        if (!$post)
            return $this->apiResponse(null, 400, 'Not Found');
        $blog = new BlogPostResource($post);
        return $this->apiResponse($blog, 200, 'Success');
    }

    public function storePost(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'author_id' => 'required|exists:authors,id',
            'title' => 'required|min:4',
            'content' => 'required|min:8',
        ]);

        if ($validate->fails())
            return $this->apiResponse($validate->errors(), 400, 'Validation Error');
        $post = BlogPost::create($request->all());
        return $this->apiResponse($post, 201, 'Post Inserted Successfully Into DataBase');
    }

    public function updateBlogPost(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'author_id' => 'required|exists:authors,id',
            'title' => 'required|min:4',
            'content' => 'required|min:8',
        ]);
        if ($validate->fails())
            return response()->json(['status' => 400 , 'msg' => 'error']);
            // return $this->apiResponse($validate->errors(), 400, 'Validation Error');
        $post = BlogPost::find($id);
        if (!$post)
            return $this->apiResponse(null, 404, 'BlogPost Not Found To Be Updated');
        $post->update($request->all());
        //return response()->json(['status' => 200 , 'msg' => 'Success' , 'data' => $post]);
        return $this->apiResponse($post, 201, 'Post Updated Successfully ');

    }

    public function register(Request $request): \Illuminate\Http\JsonResponse
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|min:4',
            'email' =>'required|email|unique:users,email',
            'password'=>'required|string|min:6',
        ]);

        if($validator->fails())
            return response()->json(['data' => $validator->errors(), 'status' => 400 , 'msg' =>'Validation Error']);
        $user = Author::create($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        return response()->json(['status' => 200 , 'msg' => 'Successfully Created User']);
    }

    public function login(Request $request): \Illuminate\Http\JsonResponse
    {
        $validator = Validator::make($request->all(),[
            'email' =>'required',
            'password'=>'required',
        ]);

        if($validator->fails())
            return response()->json(['data' => $validator->errors(), 'status' => 400 , 'msg' =>'Validation Error']);
        $credentials = request(['email','password']);
        if(Auth::guard('author')->attempt($this->credentials($request)))
        {
            $user = Author::where('email',$request->email)->first();
            $token = $user->createToken('authToken')->plainTextToken;
            return response()->json(['token' => $token, 'status' => 200 , 'msg' => 'Login Success']);
        }
        return response()->json(['msg' => 'Username or Password Is Incorrect!' , 'status' => 403]);
    }

    public function credentials($request)
    {
        return $request->only($this->username(), 'password');
    }

    public function username(): string
    {
        return 'email';
    }

    public function logout()
    {

    }
}
// login03121011 video prime
