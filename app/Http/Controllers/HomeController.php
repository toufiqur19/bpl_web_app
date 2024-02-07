<?php

namespace App\Http\Controllers;

use App\Models\ScheduleModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $scheduls = ScheduleModel::all();
        return view('home',compact('scheduls'));
    }
}
