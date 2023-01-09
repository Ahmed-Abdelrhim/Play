<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

class CustomLoginController extends Controller
{

    public function showRegisterForm(): Factory|View|Application
    {
        return view('register');
    }

    public function showLoginForm(): Factory|View|Application
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
        $user = Author::query()->create($request->except(['image']));
        $user->password = bcrypt($user->password);
        $user->save();
        if ($request->has('image')) {
            $image_name = time() . '.' . $request->file('image')->guessExtension();
            $name = $request->file('image')->storeAs('profiles', $image_name, 'public');
            $user->avatar = $image_name;
            $user->save();
            return redirect()->route('login');
        }

    }

    public function login(Request $request): View|Factory|Redirector|RedirectResponse|Application
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('login')->withErrors($validator)->withInput();
        }
        if (Auth::guard('author')->attempt($this->credentials($request))) {
            $products = Product::query()->with('cart')->paginate(10);
            return view('home', ['products' => $products]);
        }

        $email = Author::query()->where('email', $request->get('email'))->first();
        $name = Author::query()->where('name', $request->get('name'))->first();
        $phone = Author::query()->where('phone', $request->get('phone'))->first();

        if ($email || $name || $phone)
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
        $login = 'name';
        if (is_numeric($value))
            $login = 'phone';
        if (filter_var($value, FILTER_VALIDATE_EMAIL))
            $login = 'email';
        request()->merge([$login => $value]);
        return $login;
    }

    public function logout(): RedirectResponse
    {
        Auth::guard('author')->logout();
        return redirect()->route('login');
    }
}
