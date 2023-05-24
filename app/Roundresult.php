<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roundresult extends Model
{
    protected $fillable = [ 'tournament_id','round_id', 
                            'playerid', 'playername', 'playerscore', 
                            'opponentid', 'opponentname' , 'opponentscore'
                        ];

    public function tournament()
    {
        return $this->belongsTo('App\Tournament');
    }
    public function roundLevel(){
        return $this->belongsTo(Round::class,'round_id','roundNo');
    }
}
