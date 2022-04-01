<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post()
    {   
        //public function che dice che un commento può essere solo di un post
        return $this->belongsTo('App\Post');
    }
}
