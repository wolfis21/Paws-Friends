<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    protected function show(){
        /* $user = Auth::user(); */
        $user = User::find(1);
        
        $img = base64_encode(file_get_contents(public_path('storage/' . $user->photo_user)));

        return view('profile.index', compact('user', 'img'));
    }
}
