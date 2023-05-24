<?php

namespace App\Http\Controllers;

use App\Tournament;
use App\Tiebreak;
use App\Tournamenttype;
use Illuminate\Http\Request;

class TournamentController extends Controller
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
        $tournament = Tournament::all();
        return view('tournament.index', compact('tournament'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiebreaks = Tiebreak::get();
        $tournamenttypes = Tournamenttype::get();
        return view('tournament.create',compact('tiebreaks','tournamenttypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tournament = new Tournament;
        $request->validate([
            'name' => 'required|max:50',
            'type' => 'required',
            'startDate'=>'required|after_or_equal:'.date('Y-m-d'),
            'endDate'=>'required|after_or_equal:'.$request->startDate,
            'tiebreak_id' => 'required'
        ]);
        $tournament->name = $request->name;
        $tournament->type = $request->type;
        // $tournament->rounds = $request->rounds;
        $tournament->startDate = $request->startDate;
        $tournament->endDate = $request->endDate;
        $tournament->tiebreak_id = $request->tiebreak_id;
        $tournament->save();
        return redirect('/tournament');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tournament = Tournament::find($id); 
        return view('tournament.show',compact('tournament'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tournament = Tournament::find($id); 
        $tiebreaks = Tiebreak::get();
        $tournamenttypes = Tournamenttype::get();
        return view('tournament.edit',compact('tournament','tiebreaks','tournamenttypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:50',
            'type' => 'required',
            'startDate'=>'required|after:'.date('Y-m-d'),
            'endDate'=>'required|after_or_equal:'.$request->startDate,
            'tiebreak_id' => 'required'
        ]); 
        $tournament = Tournament::find($id); 
        $tournament->name = $request->name;
        $tournament->type = $request->type;
        // $tournament->rounds = $request->rounds;
        $tournament->startDate = $request->startDate;
        $tournament->endDate = $request->endDate;
        $tournament->tiebreak_id = $request->tiebreak_id;
        $tournament ->update();
        return redirect('/tournament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tournament = Tournament::find($id);
        $tournament->delete();
        return redirect('/tournament');
    }
}
