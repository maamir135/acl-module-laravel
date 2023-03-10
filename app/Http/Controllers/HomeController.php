<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // added role and permission in the tables
            // Role::create(['name'=>'writer']);
        //    $permission = Permission::create(['name'=>'edit post']);
        // added role and permission in the tables end

        // permission can be assigned to the role
            // $role = Role::findById(1);
            // $permission = Permission::findById(2);
            // $role->givePermissionTo($permission);
        // permission can be assigned to the role end


        // remove the permission from the role
        // $role = Role::findById(1);
        // $permission->removeRole($role);
        // remove permission from the end
        // return "hello";

        // assign the permission to user
        // auth()->user()->givePermissionTo('write post');
        // assign the permission to user end

        // assign the role to user
        // auth()->user()->assignRole('writer');
        // assign the permission to user end

        // check the user permission and role
        // return auth()->user()->getAllPermissions();
        // return auth()->user()->roles;
        // check the user permission and role end

        // return User::role('writer')->get();
        // return auth()->user()->removeRole('writer');
        return view('home');
    }
}
