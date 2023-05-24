<?php

namespace App\Http\Controllers;

use App\Round;
use App\Tournament;
use App\Tournamenttype;
use App\Player;
use Illuminate\Http\Request;
use Redirect;

class RoundController extends Controller
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
        $rounds = Round::all();
        return view('round.index', compact('rounds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tournaments = Tournament::get(); 
        $rounds = Round::count();
        $round = Round::latest()->first();
        
        if($rounds == 0){
            return view('round.create',compact('tournaments'));
        }
        else if($round->results()->count() == 0){
            return Redirect::back()->withErrors(['Enter the results for Previous round']);
        }
        else{
            return view('round.create',compact('tournaments'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tournament = Tournament::find($request->tournament_id);
        $totalrounds = $tournament->TRounds->count();
        $totalplayers = $tournament->TPlayers->count();
        $tournaments = Tournament::where('startDate', $request->startDate)->get();

        $request->validate([
            'roundNo' => 'required',
            'gender' => 'required',
            'date'=>'required|after_or_equal:'.date('Y-m-d')
        ]);

        if($totalrounds < $this->getRound($totalplayers)){
            $round = new Round;
            $round->tournament_id = $request->tournament_id;
            $round->roundNo = $request->roundNo;
            // $tournament->rounds = $request->rounds;
            $round->gender = $request->gender;
            $round->date = $request->date;
        
            $round->save();
            return redirect('/round');
        }
        else{
            return Redirect::back()->withErrors(['roundError' => 'Already maximum round created']);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Round  $round
     * @return \Illuminate\Http\Response
     */
    public function show(Round $round)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Round  $round
     * @return \Illuminate\Http\Response
     */
    public function edit(Round $round)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Round  $round
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Round $round)
    {
        $request->validate([
            //'playername' => 'required|max:50',
            'roundNo' => 'required',
            'tournament_id'=>'required',
            'gender' => 'required',
             
            'date'=>'required|after_or_equal:'.date('Y-m-d')
        ]); 

        $rounds = Round::find($id); 
        $rounds ->roundNo = $request->roundNo;
        $rounds->tournament_id = $request->tournament_id;
        $rounds ->gender = $request->gender;
        $rounds ->date = $request->date;
        $rounds ->update();
        return redirect('/round')->with('status', 'Round updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Round  $round
     * @return \Illuminate\Http\Response
     */
    public function destroy(Round $round)
    {
        //
    }
    public function clearRound(){
        $round = Round::truncate();
        return redirect('/round');
    }


    public function getRound($players)
    {
        switch($players){
            case($players >=1 and $players <= 2):
            // echo "Maximun round is 1!";
            return 1;
            break;
            case($players >=3 and $players <= 4):
            // echo "Maximun round is 2!";
            return 2;
            break;
            case($players >=5 and $players <= 8):
            // echo "Maximun round is 3!";
            return 3;
            break;
            case($players >=9 and $players <= 16):
            // echo "Maximun round is 4!";
            return 4;
            break;
            case($players >= 17 and $players <= 32):
            // echo "Maximun round is 5!";
            return 5;
            break;
            case($players >= 33 and $players <= 64):
            // echo "Maximun round is 6!";
            return 6;
            break;
            case($players >=65 and $players <= 128):
            echo "Maximun round is 7!";
            //return 7;
            break;
        }
    }
}
