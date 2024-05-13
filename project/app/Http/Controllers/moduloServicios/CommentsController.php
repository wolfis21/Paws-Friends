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
        return redirect()->route('index');
    }
    public function destroyVetsComment(string $id)
    {
        Comment::find($id)->delete();
        return redirect()->route('index');

    }

    public function acceptHousingsComment(string $id){
        $comment = Comment::findOrFail($id);
        $comment->accepted = true;
        $comment->save();
        return redirect()->route('housingAdmin');
    }
    public function destroyHousingsComment($id)
    {
        Comment::findOrFail($id)->delete();
        return redirect()->route('housingAdmin');

    }
    
    public function acceptDogGroomersComment(string $id){
        $comment = Comment::findOrFail($id);
        $comment->accepted = true;
        $comment->save();
        return redirect()->route('dogGroomerAdmin');
    }
    public function destroyDogGroomersComment($id)
    {
        Comment::findOrFail($id)->delete();
        return redirect()->route('dogGroomerAdmin');

    }
}
