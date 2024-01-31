<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MostRunsController extends Controller
{
    public function mostRuns()
    {
        return view('admin.most_runs');
    }
}
