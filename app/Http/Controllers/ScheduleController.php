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
 
        ScheduleModel::create([
         'match_no' => $request->match_no,
         'stadium' => $request->stadium,
         'division' => $request->division,
         'team1' => $request->team1,
         'team2' => $request->team2,
         'date' => $request->date,
         'time' => $request->time,
        ]);
 
        return redirect('/admin/schedule')->with('message','create post successfuly');
     }

     public function edit($id)
     {
        $schedules = ScheduleModel::find($id);
        return view('admin.edit',compact('schedules'));
     }

     public function update(Request $request, $id)
    {
        $request->validate([
            'match_no' => 'required',
            'stadium' => 'required|max:255|string',
            'division' => 'required|max:255|string',
            'team1' => 'required|max:255|string',
            'team2' => 'required|max:255|string',
            'date' => 'required|max:255|string',
            'time' => 'required',
           ]);

        $schedules = ScheduleModel::where('id',$id)->first();
       
        $schedules->match_no=$request->match_no;
        $schedules->stadium=$request->stadium;
        $schedules->division=$request->division;
        $schedules->team1=$request->team1;
        $schedules->team2=$request->team2;
        $schedules->date=$request->date;
        $schedules->time=$request->time;
        $schedules->save();
 
        return redirect('/admin/schedule')->with('message','update successfuly');
     }

     public function destroy($id)
     {
        $delete = ScheduleModel::where('id',$id)->first();
        $delete->delete();
        return back()->with('message','delete successfuly');
     }
}