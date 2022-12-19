<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

class CustomLoginController extends Controller
{

    public function showRegisterForm()
    {
        return view('register');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:4',
            'email' => 'required|email|unique:authors,email',
            'password' => 'required|string|min:6',
            'phone' => 'nullable|regex:/(01)[0-9]{9}/',
            'image' => 'nullable|mimes:jpg,jpeg,png,gif,webp|max:30000'
        ]);
        if ($validator->fails())
            return redirect('register/now')->withErrors($validator)->withInput();
        $user = Author::create($request->except(['image']));
        $user->password = bcrypt($user->password);
        $user->save();
        if ($request->has('image')) {
            $image_name = time() . '.' . $request->file('image')->guessExtension();
            $name = $request->file('image')->storeAs('profiles', $image_name, 'public');
            //            $user->image()->create([
            //                'src' => $name,
            //                'type' => 'avatar',
            //            ]);
            $user->avatar = $image_name;
            $user->save();
            return redirect()->route('login');
        }

    }

    public function login(Request $request)
    {
        //        $this->credentials($request);
        //                if ($request->has('phone'))
        //                    return $request;
        //                if ($request->has('name'))
        //                    return $request;
        //                return $request;
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            // return $validator->errors();
            return redirect('login')->withErrors($validator)->withInput();
        }
        if (Auth::guard('author')->attempt($this->credentials($request))) {
            return view('home');
        }

        $email = Author::query()->where('email', $request->get('email'))->first();
        $name = Author::query()->where('name', $request->get('email'))->first();
        if ($email || $name)
            return redirect()->back()->withErrors([
                'errors' => 'Password Is Incorrect!',
            ]);

        return redirect()->back()->withErrors([
            'errors' => 'Email does not exist. sign up now!',
        ]);
    }

    public function credentials($request)
    {
        return $request->only($this->username($request), 'password');
    }

    public function username($request): string
    {
        $value = $request->get('email');
        $field = 'name';
        if (is_numeric($value)) {
            $field = 'phone';
        } elseif (filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $field = 'email';
        }
        request()->merge([$field => $value]);
        return $field;
    }

    public function logout(): \Illuminate\Http\RedirectResponse
    {
        Auth::guard('author')->logout();
        //        $user->logout();
        //        $author->logout();
        return redirect()->route('login');
    }

    // he is coming right now because his phone is ringing
    // I can hear his voice coming

    //        public function username($request): string
    //    {
    //        $value = $request->get('email');
    //        $field = 'name';
    //        if (is_numeric($value)) {
    //            $field = 'phone';
    //            // request()->merge([$field => $value]);
    //            // return ['phone' => $request->get('email'), 'password' => $request->get('password')];
    //        } elseif (filter_var($value, FILTER_VALIDATE_EMAIL)) {
    //            $field = 'email';
    //            // request()->merge([$field => $value]);
    //            // return ['email' => $request->get('email'), 'password'=>$request->get('password')];
    //        }
    //        //        else {
    //        //            $field = 'name';
    //        //            request()->merge([$field => $value]);
    //        //        }
    //        request()->merge([$field => $value]);
    //        return $field;
    //
    //        //        return ['username' => $request->get('email'), 'password'=>$request->get('password')];
    //        //        return 'email';
    //    }

}
