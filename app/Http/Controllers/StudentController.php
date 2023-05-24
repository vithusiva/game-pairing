<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\Player;

class StudentController extends Controller
{
    public function index()
    {
    
        return view('post.studentapplication');
    
        
    }

     
    public function store(Request $request)
    {
        //dd($request->all());
        $players = new Player;
        $players->playername = $request->playername;
        $players->namewithInitial = $request->namewithInitial;
        $players->gender = $request->gender;
        $players->insitution = $request->insitution;
        $players->dob = $request->dob;
        $players->tournament_id = $request->tournament_id;
        $players->save();
        return redirect('/student')->with('status', 'Profile updated!');
    }
}
