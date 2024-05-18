<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'dni' => ['required', 'string', 'max:20'],
            'phone' => ['required', 'string', 'max:12'] ,
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {   
        if ($data['photo_dni'] && $data['photo_rif']&& $data['photo_user']) {
            $imgPhoto = $data['photo_user'];
            $imgDni = $data['photo_dni'];
            $imgRif = $data['photo_rif'];
            $imgPhotoPath = $imgPhoto->store('docs', 'public');
            $imgPhotoPathDni = $imgDni->store('docs', 'public');
            $imgPhotoPathRif = $imgRif->store('docs', 'public');
        } else {
            $imgPhotoPath = null;
            $imgPhotoPathDni = null;
            $imgPhotoPathRif = null;
        }

        return User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'dni' => $data['dni'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'photo_user' => $imgPhotoPath,
            'photo_dni' => $imgPhotoPathDni,
            'photo_rif' => $imgPhotoPathRif,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'rols_id' => $data['rols_id'],
        ]);
        
    }

    protected function show($id){
        $user = User::find($id);
        
        $img = base64_encode(file_get_contents(public_path('storage/' . $user->photo_user)));

        return view('profile.index', compact('user', 'img'));
    }
}
