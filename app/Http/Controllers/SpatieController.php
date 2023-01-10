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
        $author = Auth::guard('author')->user();
         $role = Role::query()->find(4);
//         $permission1 = Permission::query()->create(['name' => 'create product']);
         $permission2 = Permission::query()->create(['name' => 'update product']);
         $permission3 = Permission::query()->create(['name' => 'delete product']);

         $role->givePermissionTo([$permission2,$permission3]);

         session()->flash('success','Permissions Added Successfully');


        //        return count($author);
        //        if (count($author) > 0)
        //            return 'Yes';
        //        return 'No';
        // return $avatars = $author->getMedia();
        // return view('spatie.index',['avatars' => $avatars]);
        // return 'No Specified Action Till Now';
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

    public function productPermissions()
    {
        //        $role = Role::query()->find(4);
        //        $permission_1 = Permission::query()->create(['name' => 'create product','guard_name' => 'author']);
        //        $permission_2 = Permission::query()->create(['name' => 'update product' ,'guard_name' => 'author']);
        //        $permission_3 = Permission::query()->create(['name' => 'delete product' ,'guard_name' => 'author']);
        //
        //        $role->givePermissionTo(['create product' , 'update product'  , 'delete product']);

        session()->flash('success', 'Product Permission Created Successfully');
    }
}



