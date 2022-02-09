<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class AdopcionController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::all();
        // return dd($mascotas);
        return view('mascota.adoptar')->withTitle('index')->with(['mascotas' => $mascotas]);       
    }
}
