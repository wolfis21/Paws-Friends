<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show(string $id){
        $user = Auth::user();
        
        // $img = base64_encode(file_get_contents(public_path('storage/' . $user->photo_user)));

        return view('profile.index', compact('user'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function updateUser(Request $request, string $id){
        $user = User::findOrFail($id);
        $userReq = $request->all();
        $user->update($userReq);
        return view('main');
    }
}
