<?php

namespace App\Http\Controllers;

use App\Models\PointTable;
use Illuminate\Http\Request;

class PointController extends Controller
{
   public function pointTable()
   {
      $pointTables = PointTable::all();
    return view('admin.point_table',compact('pointTables'));
   }

   public function create()
   {
      return view('admin.point_table_create');
   }

   public function store(Request $request)
   {
      $request->validate([
         'team_no' => 'required|max:255|string',
         'team_name' => 'required|max:255|string',
         'team_logo' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
         'match' => 'required|max:255|string',
         'win' => 'required|max:255|string',
         'los' => 'required|max:255|string',
         'nrr' => 'required|max:255|string',
         'point' => 'required|max:255|string',
      ]);

      $teamLogo = time().'.'.$request->team_logo->extension();
      $request->team_logo->move(public_path('team_logo'),$teamLogo);

      PointTable::create([
         'team_no' => $request-> team_no,
         'team_name' => $request-> team_name,
         'match' => $request-> match,
         'win' => $request-> win,
         'los' => $request-> los,
         'nrr' => $request-> nrr,
         'point' => $request-> point,
         'team_logo' => $teamLogo,
      ]);

      return redirect('/admin/point/table')->with('message', 'point table create successfully!!');
   }

   public function edit($id)
   {
      $edit = PointTable::find($id);
      return view('admin.point_table_edit',compact('edit'));
   }

   public function update(Request $request,$id)
   {
      $request->validate([
         'team_no' => 'required|max:255|string',
         'team_name' => 'required|max:255|string',
         'team_logo' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
         'match' => 'required|max:255|string',
         'win' => 'required|max:255|string',
         'los' => 'required|max:255|string',
         'nrr' => 'required|max:255|string',
         'point' => 'required|max:255|string',
      ]);
      
      $pointTable = PointTable::where('id',$id)->first();

      if(isset($request->team_logo))
      {
         $teamLogo = time().'.'.$request->team_logo->extension();
         $request->team_logo->move(public_path('team_logo'),$teamLogo);
         $pointTable-> team_logo = $teamLogo;
      }

      $pointTable-> team_no = $request->team_no;
      $pointTable-> team_name = $request->team_name;
      $pointTable-> match = $request->match;
      $pointTable-> win = $request->win;
      $pointTable-> los = $request->los;
      $pointTable-> nrr = $request->nrr;
      $pointTable-> point = $request->point;
      $pointTable->save();

      return redirect('/admin/point/table')->with('message', 'point table Update successfully!!');
   }

   public function destroy($id)
   {
      $delete = PointTable::find($id);
      $delete->delete();
      return back()->with('message', 'Delete successfully!!');
   }
}
