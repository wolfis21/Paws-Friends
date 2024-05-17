<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistorialClienteController extends Controller
{
    public function index()
    {
        return view('historialcliente');
    }
}
