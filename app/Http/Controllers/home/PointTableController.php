<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\PointTable;
use Illuminate\Http\Request;

class PointTableController extends Controller
{
    public function pointTable()
    {
        $pointTables = PointTable::orderBy('id', 'ASC')->get();
        return view('home.point_table',compact('pointTables'));
    }
}
