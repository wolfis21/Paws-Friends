<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantillaController extends Controller
{
    public function CargarPlantilla()
    {
      include "vista/Plantilla.blade.php";
    }
}
