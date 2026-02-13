<?php

namespace App\Http\Controllers\Admin\Cycle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnneeSiteCycleController extends Controller
{
    public function index(){
        return view('admin.cycle.annee_site_cycle.index');
    }
}
