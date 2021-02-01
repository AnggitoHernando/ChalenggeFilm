<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';
    public function film()
    {
        return $this->belongsTo('App\Film');
    }
}
