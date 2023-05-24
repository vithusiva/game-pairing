<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Player;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post.index');
        
    }
    public function index1()
    {
        $post = post::all();

        return view('post.index1',compact('post'));
        
    }
    public function index2()
    {
        $post = post::all();

        return view('post.student',compact('post'));
    
        
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
        $post = new post;
        $post ->TournamentName = $request ->tname;
        $post ->Date = $request ->date;
        $post ->Venue = $request ->venue;
        $post ->Description = $request ->des;
        $post ->save();
        return redirect('/post1');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= post ::find ($id);
        return view('post.edit',compact('post'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = post::find($id);
        $post ->TournamentName = $request ->tname;
        $post ->Date = $request ->date;
        $post ->Venue = $request ->venue;
        $post ->Description = $request ->des;
        $post->update();
        return redirect('/post1');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $post -> delete();
        return redirect('/post1');
        //
    }
}
