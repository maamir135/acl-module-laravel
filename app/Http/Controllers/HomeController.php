<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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
           $permission = Permission::create(['name'=>'edit post']);
        // added role and permission in the tables end

        // permission can be assigned to the role
            $role = Role::findById(1);
            // $permission = Permission::findById(1);
            $role->givePermissionTo($permission);
        // permission can be assigned to the role end


        return view('home');
    }
}
