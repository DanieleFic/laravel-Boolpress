<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    public $table = 'posts';
    protected $fillable = ['title','author','content','slug','category_id','image'];

    public function category(){

        return $this->belongsTo('App\Category');
        
    }
    public function tags(){

        return $this->belongsToMany('App\Tag');
    }
}
