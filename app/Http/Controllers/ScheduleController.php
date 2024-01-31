<?php

namespace App\Http\Controllers;

use App\Models\ScheduleModel;
use App\Models\User;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function schedule()
    {
        $schedules = ScheduleModel::all();
        return view('admin.schedule',compact('schedules'));
    }

    public function create()
    {
        return view('admin.schedule_create');
    }

    public function store(Request $request)
    {
        $request->validate([
         'match_no' => 'required',
         'stadium' => 'required|max:255|string',
         'division' => 'required|max:255|string',
         'team1' => 'required|max:255|string',
         'team2' => 'required|max:255|string',
         'date' => 'required|max:255|string',
         'time' => 'required',
         'image1' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
         'image2' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
        ]);
 
        // image 1
        if($request->has('image1'))
        {
            $file = $request->file('image1');

            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/schedule/';
            $file->move($path, $filename);
        }

        // image 2
        if($request->has('image2'))
        {
            $file2 = $request->file('image2');

            $extension2 = $file2->getClientOriginalExtension();
            $filename2 = time().'.'.$extension2;
            $path2 = 'uploads/schedule/';
            $file2->move($path2, $filename2);
        }

        ScheduleModel::create([
         'match_no' => $request->match_no,
         'stadium' => $request->stadium,
         'division' => $request->division,
         'team1' => $request->team1,
         'team2' => $request->team2,
         'date' => $request->date,
         'time' => $request->time,
         'image1' => $path.$filename,
         'image2' => $path2.$filename2,
        ]);
 
        return redirect('/admin/schedule')->with('message','create post successfuly');
     }

}
