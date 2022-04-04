<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
        
        //api dei post che serve per la view in front ->with (nomi tabelle che sono collegate a post e che vuoi far apparire gli attributes)
        //get li prende tutti 
        $posts = Post::with("category", "tags","comments")->get( );
    
        return response()->json($posts);
    }

    public function show($slug){
        
        //api dei post che serve per la view in front ->with (nomi tabelle che sono collegate a post e che vuoi far apparire gli attributes)
        //first() solo il primo 
        $post = Post::where("slug",$slug)->with("category", "tags","comments")->first();

        if( empty($post) ) {
            return response()->json(["message" => "Post Not Found"], 404);
        }
    
        return response()->json($post);
    }
    
}
