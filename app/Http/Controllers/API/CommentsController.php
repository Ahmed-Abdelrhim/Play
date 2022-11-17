<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiCommentsLoginRequest;
use App\Http\Requests\ApiCommentsRegisterRequest;
use Illuminate\Http\Request;

class CommentsController
{
    public function register(ApiCommentsRegisterRequest $request): \Illuminate\Http\JsonResponse
    {
        return response()->json(['msg' => 'success' , 'status' => 200]);
    }

    public function login(ApiCommentsLoginRequest $request): \Illuminate\Http\JsonResponse
    {

    }

    public function index()
    {

    }

    public function store()
    {

    }

    public function show()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
