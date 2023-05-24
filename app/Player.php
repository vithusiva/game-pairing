<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [ 'playername', 'namewithInitial', 'gender', 
    'insitution', 'dob', 'tournament_id'];

    public function tournament(){
        return $this->belongsTo(Tournament::class);
    }
}
