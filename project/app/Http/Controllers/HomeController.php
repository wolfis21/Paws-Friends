<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

/*     public function __construct()
    {
        return view('auth_admin/login');
        $this->middleware('auth');
    } */
    
    public function __invoke(){
       return view('layouts.dashboard');
   }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('main');
        
    }
}
