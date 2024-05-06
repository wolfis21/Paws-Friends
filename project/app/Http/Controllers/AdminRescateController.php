<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRescateController extends Controller
{
    public function index()
    {
        return view('adminrescate');
    }
}
