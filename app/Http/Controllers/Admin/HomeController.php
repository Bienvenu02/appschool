<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('admin.dashboard.index1', ['roles' => Role::get()]);
    }

    public function create(){
        return view('admin.users.form', ['utilisateur' => new User]);
    }
}
