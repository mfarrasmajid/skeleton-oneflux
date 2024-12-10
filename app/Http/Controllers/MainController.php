<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware(['session', 'logincheck', 'cekmaintenance']);
    }

    public function dashboard(){
        return redirect()->route('dashboard_skeleton');
    }

    public function dashboard_skeleton(){
        return view('core.dashboard');
    }

    public function create_skeleton(){
        return view('core.create');
    }

    public function submit_create_skeleton(){
        return redirect()->route('create_skeleton')->with('success', 'Data successfully created!');
    }

    public function list_skeleton(){
        return view('core.list');
    }

    public function outstanding_skeleton(){
        return view('core.outstanding');
    }

    public function version_log(){
        return view('system.version_log');
    }
}
