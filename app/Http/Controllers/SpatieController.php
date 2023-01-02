<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SpatieController extends Controller
{
    public function handle()
    {
        $author = Auth::guard('author')->user()->getMedia('images');

        $permission = Permission::query()->create(['name' => 'delete post']);

        $role = Role::query()->find(4)->first();

        $role->givePermissionTo($permission);

        //        return count($author);
        //        if (count($author) > 0)
        //            return 'Yes';
        //        return 'No';
        // return $avatars = $author->getMedia();
        // return view('spatie.index',['avatars' => $avatars]);
    }

    public function download()
    {
        $user = auth()->guard('author')->user();
        return $user->getFirstMedia('images');
            //->toMediaCollection();
    }

    public function downloadImageProfile()
    {
        return $user = auth()->guard('author')->user();
        return auth()->guard('author')->user()->getFirstMedia('images');
    }
}
