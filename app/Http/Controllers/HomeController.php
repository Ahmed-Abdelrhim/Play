<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Cart;
use App\Models\Language;
use App\Models\Product;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    //    public function __construct()
    //    {
    //        $this->middleware('auth');
    //    }

    public function change_locale(string $locale)
    {
        $language = Language::query()->where('iso', '=', $locale)->first();
        if (!$language)
            return 'Language Not Found';
        session()->put('locale', $locale);
        return redirect()->back();

    }



    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        $products = Product::query()->with('cart')->paginate(10);
        return view('home',['products' => $products]);
    }
}



//        $role1 = Role::create(['name' => 'writer']);
//        $role2 = Role::create(['name' => 'editor']);
//        $role3 = Role::create(['name' => 'publisher']);
//        $role4 = Role::create(['name' => 'admin']);
//        $permission1 = Permission::create(['name' => 'write post']);
//        $permission2 = Permission::create(['name' => 'edit post']);
//        $permission3 = Permission::create(['name' => 'publish post']);
//
//        $permission1->assignRole($role1);
//        $permission1->assignRole($role4);
//        $permission2->assignRole($role2);
//        $permission2->assignRole($role4);
//        $permission3->assignRole($role3);
//        $permission3->assignRole($role4);

// azzam@gmail.com
// ismail@gmail.com
// anas@gmail.com


// Abdelrhim is Admin
// $user = auth()->guard('author')->user();
// $user->assignRole('admin');

// Azzam is Writer
// $azzam = Author::query()->where('email' , 'azzam@gmail.com')->first();
// $azzam->assignRole('writer');

// Ismail is Editor
// $ismail = Author::query()->where('email' , 'ismail@gmail.com')->first();
// $ismail->assignRole('editor');

// Anas is Publisher
// $anas = Author::query()->where('email' , 'anas@gmail.com')->first();
// $anas->assignRole('publisher');

// $author = Author::query()->where('email','abdelrhim.admin@gmail.com')->first();
// $author->assignRole('admin');
