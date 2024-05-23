<?php

namespace App\Http\Controllers\moduloServicios;

use App\Http\Controllers\Controller;
use App\Models\moduloServicios\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function configComment(string $id){
        $comment = Comment::findOrFail($id);
        $comment->accepted = true;
        $comment->save();
        return redirect()->route('indexVeterinarians')->with('successComment','Se acepto este comentario');
    }
    public function destroyVetsComment(string $id)
    {
        Comment::find($id)->delete();
        return redirect()->route('indexVeterinarians')->with('denagateComment','Se denego este comentario');

    }

    public function acceptHousingsComment(string $id){
        $comment = Comment::findOrFail($id);
        $comment->accepted = true;
        $comment->save();
        return redirect()->route('housingAdmin')->with('successComment','Se acepto este comentario');
    }
    public function destroyHousingsComment($id)
    {
        Comment::findOrFail($id)->delete();
        return redirect()->route('housingAdmin')->with('denagateComment','Se denego este comentario');

    }
    
    public function acceptDogGroomersComment(string $id){
        $comment = Comment::findOrFail($id);
        $comment->accepted = true;
        $comment->save();
        return redirect()->route('dogGroomerAdmin')->with('successComment','Se acepto este comentario');
    }
    public function destroyDogGroomersComment($id)
    {
        Comment::findOrFail($id)->delete();
        return redirect()->route('dogGroomerAdmin')->with('denagateComment','Se denego este comentario');

    }
}
