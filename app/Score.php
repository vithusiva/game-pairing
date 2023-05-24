<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    public function tournament(){
        return $this->belongsTo(Tournament::class);
    }
}
