<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.admin');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
