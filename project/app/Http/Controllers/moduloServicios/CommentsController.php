<?php

namespace App\Http\Controllers\moduloServicios;

use App\Http\Controllers\Controller;
use App\Models\moduloServicios\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function acceptCommentVeterinarians(Request $request, string $id){
        $comment = Comment::findOrFail($id);
        $comment->accepted = true;
        $comment->update($request->all());
        return redirect()->route('index');
    }
    public function destroyVetsComment($id)
    {
        Comment::find($id)->delete();
        return redirect()->route('index');

    }

    public function acceptHousingsComment(Request $request, string $id){
        $comment = Comment::findOrFail($id);
        $comment->accepted = true;
        $comment->update($request->all());
        return redirect()->route('housingAdmin');
    }
    public function destroyHousingsComment($id)
    {
        Comment::find($id)->delete();
        return redirect()->route('housingAdmin');

    }
    
    public function acceptDogGroomersComment(Request $request, string $id){
        $comment = Comment::findOrFail($id);
        $comment->accepted = true;
        $comment->update($request->all());
        return redirect()->route('dogGroomerAdmin');
    }
    public function destroyDogGroomersComment($id)
    {
        Comment::find($id)->delete();
        return redirect()->route('dogGroomerAdmin');

    }
}
