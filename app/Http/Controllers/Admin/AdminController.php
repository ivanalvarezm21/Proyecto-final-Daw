<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Coches;
use App\Http\Controllers\CochesController;

class AdminController extends Controller
{

    public function __construct(){
        $this->middleware('admin');
    }

    public function index(){
        return view('admin.index');
    }

    public function list_users()

    {        
        $users = User::all();
        return view('admin.list_users', compact('users'));
    }

    public function list_coches()

    {        
        $coches = Coches::all();
        return view('admin.list_coches', compact('coches'));
    }

    public function create_coches()

    {        
        $coches = Coches::all();
        return view('admin.create_coches', compact('coches'));
    }

}
