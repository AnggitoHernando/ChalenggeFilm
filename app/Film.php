<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'film';
    public function review(){
        return $this->hasMany('App\Review', 'film_id');
    }
}
