<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provincia;
use App\Http\Resources\ProvinciasResource;

class Provincias extends Controller
{
    function index (Request $request){
        return response()->json([
            'success' => true,
            'data' => ProvinciasResource::collection(Provincia::all()),
            'message' => 'Listado de provincias.'
        ]);
    }
}
