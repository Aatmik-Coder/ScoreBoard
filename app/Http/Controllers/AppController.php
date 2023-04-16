<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Players;
use App\Models\Score;
// use DB;

class AppController extends Controller
{
    public function player(Request $request) {
        $total_player = $request->number_of_player;
        return view('name_of_players',compact('total_player'));
    }

    public function name_of_player(Request $request) {
        $total_players = count($request->all()) - 1;
        for($i = 1; $i <= $total_players; $i++){
                try{
                    Players::create([
                        'name' => $request->input('player_'.$i)
                    ]);
                } catch(\Illuminate\Database\QueryException $e) {
                    $errorCode = $e->errorInfo[1];
                    if($errorCode == 1062){
                        return back()->with('error','Name already exists try another name please!');
                    }
                }
            }
        $all_players = Players::with('scores')->get();
        // dd($all_players);
        return view('scorecard',compact('all_players'));
    }

    public function score(Request $request){
        info($request);
        for($i = 0; $i < count($request->player); $i++){
            info($i);
            $add_score = Score::create([
                'player_id'=>$request->player[$i]['player'],
                'round_number'=>$request->round,
                'score'=>$request->player[$i]['value']             
            ])->save();
        }
        return redirect('/players')->with('success','Saved!');;
    }
}
