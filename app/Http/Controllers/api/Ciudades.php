<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ciudad;
use App\Http\Resources\CiudadesResource;

class Ciudades extends Controller
{
    function index (Request $request){
        return response()->json([
            'success' => true,
            'data' => CiudadesResource::collection(Ciudad::all()),
            'message' => 'Listado de Ciudades.'
        ]);
    }
}
