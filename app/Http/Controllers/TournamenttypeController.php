<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Tournamenttype;
use Illuminate\Http\Request;

class TournamenttypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ties = DB::table('tournamenttypes')
                ->get();
        return view('tournamenttype.index',compact('ties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tournamenttype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tie = new Tournamenttype;
        $tie->typename = $request->typename;
        $tie->save();


        return redirect('/tournamenttype');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tournamenttype  $tournamenttype
     * @return \Illuminate\Http\Response
     */
    public function show(Tournamenttype $tournamenttype)
    {
        $tie = Tournamenttype::find($id);
        return view('tournamenttype.edit', compact('tie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tournamenttype  $tournamenttype
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tie = Tournamenttype::find($id);
        return view('tournamenttype.edit', compact('tie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tournamenttype  $tournamenttype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tie = Tournamenttype::find($id);
        $tie->typename = $request->typename;
        $tie->update();

        return redirect('/tournamenttype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tournamenttype  $tournamenttype
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $post = Tournamenttype::find($id);
        $post -> delete();
        return redirect('/tournamenttype');
        //
    }
}
