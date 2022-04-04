<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;

use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request){
        
        //tutti i dati che ci arrivano dal request li mettiamo in una variabile $data
        $data = $request->all();
        
        //validazione dei dati che ci arrivano dal request
        $validator = Validator::make($data, [
            'name' => 'nullable|string|max:50',
            'content' => 'string|required',
            'post_id' => 'exists:posts,id'
        ]);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
                'data' => $data
            ],400);
        }

        $newComment = new Comment();

        if( !empty($data['name']) ){
            $newComment->name = $data['name'];
        }
        $newComment->content = $data['content'];
        $newComment->post_id = $data["post_id"];
        $newComment->save();

        
        //resituisco una risposta
        return response()->json([
            'success' => true
        ]);
    }
    

}
