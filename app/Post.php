<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    public $table = 'posts';
    protected $fillable = ['title','author','content','slug','category_id','image'];

    //public function che collega le categorie ai post || un post può avere una sola categoria
    public function category(){

        return $this->belongsTo('App\Category');
        
    }
    //public function che collega i tag ai post || un post può avere più tag
    public function tags(){

        return $this->belongsToMany('App\Tag');
    }

    //public function che collega i commenti ai post|| un post può avere più commenti
    public function comments(){

        return $this->hasMany('App\Comment');
    }
}
