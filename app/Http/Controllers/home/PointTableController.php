<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PointTableController extends Controller
{
    public function pointTable()
    {
        return view('home.point_table');
    }
}
