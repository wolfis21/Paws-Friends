<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeServicesController extends Controller
{
    public function __invoke(){
        return view('homeServices');

    }
}
