<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User, App\Role;

class RoleUserController extends Controller
{
    public function create(User $user)
    {
        $roles = Role::select('name')->get();
        return view('role-user.create', compact('user','roles'));
    }

    public function store(User $user) 
    {
       collect(request('role'))->each(function($role) use ($user) {
           return $user->addRole($role);        
       });

       return redirect()->back();
    }
}
