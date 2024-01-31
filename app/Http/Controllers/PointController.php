<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PointController extends Controller
{
   public function pointTable()
   {
    return view('admin.point_table');
   }
}
