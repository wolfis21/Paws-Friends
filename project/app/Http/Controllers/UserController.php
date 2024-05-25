<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function show(string $id)
    {
        $user = Auth::user();

        // $img = base64_encode(file_get_contents(public_path('storage/' . $user->photo_user)));

        return view('profile.index', compact('user'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function updateUser(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $userData = $request->all();
        $filesToUpload = [
            ['field' => 'photo_user', 'path' => 'userImg'],
            ['field' => 'photo_dni', 'path' => 'dniImg'],
            ['field' => 'photo_rif', 'path' => 'rifImg']
        ];

        foreach ($filesToUpload as $fileInfo) {
            $imgPhoto = $request->file($fileInfo['field']);
            if ($imgPhoto) {
                $imgPhotoPath = 'storage/users/' . $fileInfo['path'];
                $img = date('YmdHis') . "_" . $imgPhoto->getClientOriginalExtension();
                $imgPhoto->move($imgPhotoPath, $img);
                $userData[$fileInfo['field']] = $img;
            }
        }

        $user->update($userData);
        $info = 'Perfil editado';
        return view('profile.index', compact('user','info'));
    }


    public function allAdmin()
    {
        $admins = User::where('rols_id', 1)->get();
        return view('moduloUsers.admin.index', compact('admins'));
    }
    public function allUser()
    {
        $customers = User::where('rols_id', 2)->get();
        return view('moduloUsers.user.index', compact('customers'));
    }
    public function createAdmin()
    {
        return view('moduloUsers.admin.create');
    }
    public function createForm(Request $request)
    {
        if ($request['photo_dni'] || $request['photo_rif'] || $request['photo_user']) {
            $imgPhoto = $request['photo_user'];
            $imgDni = $request['photo_dni'];
            $imgRif = $request['photo_rif'];
            $imgPhotoPath = $imgPhoto->store('docs', 'public');
            $imgPhotoPathDni = $imgDni->store('docs', 'public');
            $imgPhotoPathRif = $imgRif->store('docs', 'public');
        } else {
            $imgPhotoPath = null;
            $imgPhotoPathDni = null;
            $imgPhotoPathRif = null;
        }

        if ($imgPhoto = $request->file('photo_user')) {
            $imgPhotoPath = 'storage/userImg';
            $img = date('YmdHis') . "_" . $imgPhoto->getClientOriginalExtension();
            $imgPhoto->move($imgPhotoPath, $img);
            $userData['photo_user'] = "$img";
        }
        if ($imgPhoto = $request->file('photo_dni')) {
            $imgPhotoPath = 'storage/dniImg';
            $img = date('YmdHis') . "_" . $imgPhoto->getClientOriginalExtension();
            $imgPhoto->move($imgPhotoPath, $img);
            $userData['photo_dni'] = "$img";
        }
        if ($imgPhoto = $request->file('photo_rif')) {
            $imgPhotoPath = 'storage/rifImg';
            $img = date('YmdHis') . "_" . $imgPhoto->getClientOriginalExtension();
            $imgPhoto->move($imgPhotoPath, $img);
            $userData['photo_rif'] = "$img";
        }

        $user = User::create([
            'name' => $request['name'],
            'last_name' => $request['last_name'],
            'dni' => $request['dni'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'photo_user' => $imgPhotoPath,
            'photo_dni' => $imgPhotoPathDni,
            'photo_rif' => $imgPhotoPathRif,
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'rols_id' => $request['rols_id'],
        ]);
        return $this->allAdmin();
    }
    public function destroyAdmin(string $id)
    {
        $user = User::find($id);
        if (Auth::id() === $user->id) {
            return redirect()->back();
        } else {
            $user = User::findOrFail($id);
            $user->delete();
        }
        return $this->allAdmin();
    }
}
