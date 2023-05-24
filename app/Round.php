<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    protected $fillable = [ 'id','roundNo', 'tournament_id', 'gender', 'date'];


    public function tournament()
    {
        return $this->belongsTo('App\Tournament');
    }

    public function results()
    {
        return $this->hasMany(Roundresult::class);
    }
    public function tournamentType(){
        return $this->belongsTo(Tournamenttype::class,'type','id');
    }

}


