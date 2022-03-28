<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::paginate(5);
        return view('admin.users.index', compact("users"));
    }

    public function edit() {
        $roles=Role::all();

        return view('admin.users.edit', compact('user','roles'));
    }

    public function update(Request $request, User $user){
        $user->roles()->sync($request->roles);
        return redirect()->route('users.edit',$user)->with("success", __("Asignados roles!"));
    }
}