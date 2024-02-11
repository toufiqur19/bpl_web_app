<?php

namespace App\Http\Controllers;

use App\Models\MustWicket;
use Illuminate\Http\Request;

class MostWicketController extends Controller
{
    public function mostWicket()
   {
    $mostWickets = MustWicket::all();
    return view('admin.most_wicket',compact('mostWickets'));
   }

   public function create()
   {
    return view('admin.most_wicket_create');
   }

   public function homeMostWicket()
   {
    $mostPlayers = MustWicket::all();
    return view('home.most_wicket',compact('mostPlayers'));
   }

   public function store(Request $request)
   {
    $request->validate([
        'pos' => 'required|max:255|string',
        'player_name' => 'required|max:255|string',
        'team_name' => 'required|max:255|string',
        'match_no' => 'required|max:255|string',
        'inns' => 'required|max:255|string',
        'runs' => 'required|max:255|string',
        'over' => 'required|max:255|string',
        'avg' => 'required|max:255|string',
        'wicket' => 'required|max:255|string',
        'eco' => 'required|max:255|string',
        'four_w' => 'required|max:255|string',
        'five_w' => 'required|max:255|string',
        'bbi' => 'required|max:255|string',
        'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
    ]);

    $mostWicket = time().'.'.$request->image->extension();
    $request->image-> move(public_path('wicket/image'),$mostWicket);

    MustWicket::create([
        'pos' => $request->pos,
        'player_name' => $request->player_name,
        'team_name' => $request->team_name,
        'match_no' => $request->match_no,
        'inns' => $request->inns,
        'runs' => $request->runs,
        'over' => $request->over,
        'avg' => $request->avg,
        'wicket' => $request->wicket,
        'eco' => $request->eco,
        'four_w' => $request->four_w,
        'five_w' => $request->five_w,
        'bbi' => $request->bbi,
        'image' => $mostWicket,

    ]);
    return redirect('/admin/most/wicket')->with('message','Create successfully!!');
   }

   public function edit($id)
   {
    $playerEdits = MustWicket::find($id);
    return view('admin.most_wicket_edit',compact('playerEdits'));
   }

   public function update(Request $request,$id)
   {
    $request->validate([
        'pos' => 'required|max:255|string',
        'player_name' => 'required|max:255|string',
        'team_name' => 'required|max:255|string',
        'match_no' => 'required|max:255|string',
        'inns' => 'required|max:255|string',
        'runs' => 'required|max:255|string',
        'over' => 'required|max:255|string',
        'avg' => 'required|max:255|string',
        'wicket' => 'required|max:255|string',
        'eco' => 'required|max:255|string',
        'four_w' => 'required|max:255|string',
        'five_w' => 'required|max:255|string',
        'bbi' => 'required|max:255|string',
        'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
    ]);

    $mostWicketUpdate = MustWicket::where('id',$id)->first();
    
    if(isset($request->image))
    {
        $mostWicket = time().'.'.$request->image->extension();
        $request->image-> move(public_path('wicket/image'),$mostWicket);
        $mostWicketUpdate-> image = $mostWicket;
    }

        $mostWicketUpdate-> pos = $request->pos;
        $mostWicketUpdate-> player_name = $request->player_name;
        $mostWicketUpdate-> team_name = $request->team_name;
        $mostWicketUpdate-> match_no = $request->match_no;
        $mostWicketUpdate-> inns = $request->inns;
        $mostWicketUpdate-> runs = $request->runs;
        $mostWicketUpdate-> over = $request->over;
        $mostWicketUpdate-> avg = $request->avg;
        $mostWicketUpdate-> wicket = $request->wicket;
        $mostWicketUpdate-> eco = $request->eco;
        $mostWicketUpdate-> four_w = $request->four_w;
        $mostWicketUpdate-> five_w = $request->five_w;
        $mostWicketUpdate-> bbi = $request->bbi;
        $mostWicketUpdate-> save();
        
    return redirect('/admin/most/wicket')->with('message','Update successfully!!');
   }

   public function delete($id)
   {
    $wicketDelete = MustWicket::find($id);
    $wicketDelete->delete();
    return redirect('/admin/most/wicket')->with('message','Delete successfully!!');
   }
}
