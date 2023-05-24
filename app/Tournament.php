<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = [ 'name','type', 'rounds', 'startDate', 'endDate', 'tiebreak_id'];

    public function players(){
        return $this->hasmany('App\Player');
    }
    public function TRounds(){
        return $this->hasmany('App\Round');
    }
    public function TPlayers()
    {
        return $this->hasmany('App\Player');        
    }
    public function roundresults(){
        return $this->hasmany('App\Roundresult');
    }
    public function scores(){
        return $this->hasmany('App\Score');
    }
    public function tiebreak(){
        return $this->belongsTo(Tiebreak::class);
    }
    public function tournamentType(){
        return $this->belongsTo(Tournamenttype::class,'type','id');
    }
}
