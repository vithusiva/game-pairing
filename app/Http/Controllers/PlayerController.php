<?php

namespace App\Http\Controllers;

use App\Player;
use App\Tournament;
use Illuminate\Http\Request;
use App\Score;
use App\Category;
use App\Round;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth'); 
    }
    public function index()
    {
        $players = Player::all();
        return view('player.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tournaments = Tournament::get();
        return view('player.create',compact('tournaments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $players = new Player;
        $request->validate([
            //'playername' => 'required|max:50',
            'namewithInitial' => 'required',
            'gender' => 'required'
            // 'insitution'=>'required',
            // 'dob'=>'required'
        ]);
        $players->playername = $request->playername;
        $players->namewithInitial = $request->namewithInitial;
        $players->gender = $request->gender;
        $players->insitution = $request->insitution;
        $players->dob = $request->dob;
        $players->tournament_id = $request->tournament_id;
        $players->save();
        return redirect('/player')->with('status', 'Profile updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $players = Player::find($id); 
        return view('player.show',compact('players'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $players = Player::find($id); 
        return view('player.edit',compact('players'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            //'playername' => 'required|max:50',
            'namewithInitial' => 'required',
            'gender' => 'required'
            // 'insitution'=>'required',
            // 'dob'=>'required'
        ]); 

        $players = Player::find($id); 
        $players ->playername = $request->playername;
        $players ->namewithInitial = $request->namewithInitial;
        $players ->gender = $request->gender;
        $players ->insitution = $request->insitution;
        $players ->dob = $request->dob;
        $players ->update();
        return redirect('/player')->with('status', 'Player Profile updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $players = Player::find($id);
        $players->delete();
        return redirect('/player');
    }

//     public function pairing()
// {
//     $round = Round::find(request()->id);
//     $tournament = Tournament::find($round->tournament_id);

//     if ($tournament->TRounds->count() > 1) {
//         // Pairing logic for multiple rounds
//         $players = [];
//         $skipPlayers = [];
//         $scores = $tournament->scores()->where('matchpoints', '>', 0)->orderBy('matchpoints', 'desc')->get();

//         foreach ($scores as $score) {
//             $player = [
//                 'id' => $score->player_id,
//                 'namewithInitial' => $score->namewithInitial
//             ];
            
//             $lastID = 0;
//             if ($lastID != 0) {
//                 $result = Roundresult::where('tournament_id', $tournament->id)
//                     ->where('playerid', $lastID)
//                     ->where('opponentid', $player['id'])
//                     ->first();

//                 if (empty($result)) {
//                     array_push($players, $player);
//                     $lastID = $player['id'];
//                 }
//             } else {
//                 array_push($players, $player);
//                 $lastID = $player['id'];
//             }
//         }
//     } else {
//         // Pairing logic for first round
//         $players = Player::where('gender', $round->gender)
//             ->where('tournament_id', $round->tournament_id)
//             ->get();
//     }
    
//     // Knockout pairing for 10 players
//     $a_players = [];
//     $b_players = [];

//     // Sort players by score
//     $sortedPlayers = collect($players)->sortByDesc('score')->values();

//     // Pair players for knockout rounds
//     $count = $sortedPlayers->count();
//     $pairCount = $count / 2;

//     for ($i = 0; $i < $pairCount; $i++) {
//         $playerA = $sortedPlayers[$i];
//         $playerB = $sortedPlayers[$count - 1 - $i];

//         array_push($a_players, $playerA);
//         array_push($b_players, $playerB);
//     }

//     return view('player.pair', compact('a_players', 'b_players', 'round'));
// }

    
    public function pairing()
    {
        $round = Round::find(request()->id);
        $tournament = Tournament::find($round->tournament_id);

        if($tournament->TRounds->count() > 1){
            $players = [];
            $skipPlayers = [];

            // $scores = $tournament->scores()->orderBy('gamepoints','desc')->get();

            $scores = $tournament->scores()->where('matchpoints', '>', 0)->orderBy('matchpoints', 'desc')->orderBy('namewithInitial', 'asc')->get();
            foreach($scores as $score){
                $player = [
                    'id'=>$score->player_id,
                    'namewithInitial'=>$score->namewithInitial
                ];                
                  
                $lastID = 0;
                if ($lastID != 0) {
                    // $result = Roundresult::where('tournament_id',$tournament->id)->where('playerid',$lastID)->where('opponentid',$player['id']);
                    $result = Roundresult::where('tournament_id',$tournament->id)->where('playerid',$lastID)->where('opponentid',$player['id'])->first();
                    if (empty($result)) {
                        array_push($players,$player);
                        $lastID = $player['id'];
                    }
                }
                else{
                    array_push($players,$player);
                    $lastID = $player['id'];
                }
            }
        }
        else{
            $players = Player::where('gender',$round->gender)->where('tournament_id',$round->tournament_id)->get();
        }
        
        $a_players = [];
        $b_players = [];
        foreach ($players as $key => $player) {
            if (($key+1)%2) {
                array_push($a_players,$player);
            }else{
                array_push($b_players,$player);
            }
        }        

        return view('player.pair',compact('a_players','b_players','round'));
    }
}
