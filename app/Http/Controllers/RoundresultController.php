<?php

namespace App\Http\Controllers;

use App\{Roundresult,Score,Tournament};
use Illuminate\Http\Request;

class RoundresultController extends Controller
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
        // $roundresults = Roundresult::with('Tournament')->get();
        // return $roundresults;
        $roundresults = Roundresult::all();
        return view('roundresult.index', compact('roundresults'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->player_id as $key => $pID) {
            $roundresult = new RoundResult;
            $roundresult->tournament_id = $request->tournament_id;
            $roundresult->round_id = $request->round_id;
            $roundresult->playerid = $pID;
            $roundresult->playername = $request->player_name[$key];
            $roundresult->opponentid = $request->opp_id[$key];
            $roundresult->opponentname = $request->opp_name[$key];

            if($request->score[$key] == '2-0'){
                $roundresult->playerscore = 2;
                $roundresult->opponentscore = 0;
            }
            else if($request->score[$key] == '0-2'){
                $roundresult->playerscore = 0;
                $roundresult->opponentscore = 2;
            }
            else if($request->score[$key] == '1-1'){
                $roundresult->playerscore = 1;
                $roundresult->opponentscore = 1;
            }
            else if($request->score[$key] == '1f-0f'){
                $roundresult->playerscore = 2;
                $roundresult->opponentscore = 0;
            }
            else if($request->score[$key] == '0f-1f'){
                $roundresult->playerscore = 0;
                $roundresult->opponentscore = 2;
            }
            
            $roundresult->save();

            // Player Score Update / Create Section
            $pScore = Score::where('tournament_id',$roundresult->tournament_id)->where('player_id',$roundresult->playerid)->first();
                if (empty($pScore)) {
                    $pScore = new Score;
                    $pScore->tournament_id = $roundresult->tournament_id;
                    $pScore->player_id = $roundresult->playerid;
                    $pScore->namewithInitial = $roundresult->playername;
                    $pScore->gamepoints = $roundresult->playerscore;                
                }else{
                    $pScore->gamepoints = $pScore->gamepoints + $roundresult->playerscore;
                }
                $pScore->matchpoints = $roundresult->playerscore; 
                $pScore->save(); 

            // Opponent Score Update / Create Section
            $oScore = Score::where('tournament_id',$roundresult->tournament_id)->where('player_id',$roundresult->opponentid)->first();
                if (empty($oScore)) {
                    $oScore = new Score;
                    $oScore->tournament_id = $roundresult->tournament_id;
                    $oScore->player_id = $roundresult->opponentid;
                    $oScore->namewithInitial = $roundresult->opponentname;
                    $oScore->gamepoints = $roundresult->opponentscore;                
                }
                else{
                    $oScore->gamepoints = $oScore->gamepoints + $roundresult->opponentscore;
                }
                $oScore->matchpoints = $roundresult->opponentscore; 
                $oScore->save(); 
        }
        return redirect('/round');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Roundresult  $roundresult
     * @return \Illuminate\Http\Response
     */
    public function show(Roundresult $roundresult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Roundresult  $roundresult
     * @return \Illuminate\Http\Response
     */
    public function edit(Roundresult $roundresult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Roundresult  $roundresult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roundresult $roundresult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Roundresult  $roundresult
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roundresult $roundresult)
    {
        //
    }
    public function clearRoundResult(){
        $roundresult = Roundresult::truncate();
        return redirect('/roundresult');
    }
}
