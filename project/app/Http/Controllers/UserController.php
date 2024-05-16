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
    
        $userData = $request->except('photo_user','photo_dni','photo_rif');
        
        if ($request->hasFile('photo_dni') && $request->hasFile('photo_rif') && $request->hasFile('photo_user')) {
            $imgDni = $request->file('photo_dni')->store('docs', 'public');
            $imgRif = $request->file('photo_rif')->store('docs', 'public');
            $imgPhoto = $request->file('photo_user')->store('docs', 'public');
            
            $userData['photo_user'] = $imgPhoto;
            $userData['photo_dni'] = $imgDni;
            $userData['photo_rif'] = $imgRif;
        } else {
            $userData['photo_user'] = null;
            $userData['photo_dni'] = null;
            $userData['photo_rif'] = null;
        }
    
        $user->update($userData);
        
        return view('main');
    }
    
}
