<?php

namespace App\Http\Controllers;

use App\Models\MostRun;
use Illuminate\Http\Request;

class MostRunsController extends Controller
{
    public function mostRuns()
    {
        $mostRuns = MostRun::all();
        return view('admin.most_runs',compact('mostRuns'));
    }
    public function mostPlayer()
    {
        $mostPlayers = MostRun::all();
        return view('home.most_runs',compact('mostPlayers'));
    }
    public function create()
    {
        return view('admin.most_runs_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pos' => 'required|max:255|string',
            'player_name' => 'required|max:255|string',
            'team' => 'required|max:255|string',
            'match' => 'required|max:255|string',
            'inns' => 'required|max:255|string',
            'runs' => 'required|max:255|string',
            'sr' => 'required|max:255|string',
            'avg' => 'required|max:255|string',
            'hight' => 'required|max:255|string',
            'fifty' => 'required|max:255|string',
            'hundred' => 'required|max:255|string',
            'four' => 'required|max:255|string',
            'six' => 'required|max:255|string',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $playerImage = time().'.'.$request->image->extension();
        $request->image-> move(public_path('/player/image'),$playerImage);

        MostRun::create([
            'pos' => $request->pos,
            'player_name' => $request->player_name,
            'team' => $request->team,
            'match' => $request->match,
            'inns' => $request->inns,
            'runs' => $request->runs,
            'sr' => $request->sr,
            'avg' => $request->avg,
            'hight' => $request->hight,
            'fifty' => $request->fifty,
            'hundred' => $request->hundred,
            'four' => $request->four,
            'six' => $request->six,
            'image' => $playerImage,
            
        ]);
        return redirect('/admin/most/runs')->with('message','Create Successfully!!');
    }

    public function edit($id)
    {
        $playerRuns = MostRun::find($id);
        return view('admin.must_run_edit',compact('playerRuns'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'pos' => 'required|max:255|string',
            'player_name' => 'required|max:255|string',
            'team' => 'required|max:255|string',
            'match' => 'required|max:255|string',
            'inns' => 'required|max:255|string',
            'runs' => 'required|max:255|string',
            'sr' => 'required|max:255|string',
            'avg' => 'required|max:255|string',
            'hight' => 'required|max:255|string',
            'fifty' => 'required|max:255|string',
            'hundred' => 'required|max:255|string',
            'four' => 'required|max:255|string',
            'six' => 'required|max:255|string',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $updatePlayer = MostRun::where('id',$id)->first();

        if(isset($request->image))
        {
            $playerImage = time().'.'.$request->image->extension();
            $request->image-> move(public_path('/player/image'),$playerImage);
            $updatePlayer->image = $playerImage;
        }
        
        $updatePlayer->pos = $request->pos;
        $updatePlayer->player_name = $request->player_name;
        $updatePlayer->team = $request->team;
        $updatePlayer->match = $request->match;
        $updatePlayer->inns = $request->inns;
        $updatePlayer->runs = $request->runs;
        $updatePlayer->sr = $request->sr;
        $updatePlayer->avg = $request->avg;
        $updatePlayer->hight = $request->hight;
        $updatePlayer->fifty = $request->fifty;
        $updatePlayer->hundred = $request->hundred;
        $updatePlayer->four = $request->four;
        $updatePlayer->six = $request->six;
        $updatePlayer->save();

        return redirect('/admin/most/runs')->with('message','update Successfully!!');
    }
    public function destroy($id)
    {
        $deletePlayer = MostRun::find($id);
        $deletePlayer->delete();
        return redirect('/admin/most/runs')->with('message','delete Successfully!!');
    }
}
