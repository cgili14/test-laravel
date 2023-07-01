<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Provincia;
use App\Models\Ciudad;
use Storage;

class CiudadProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::disk('local')->get('ciudadesProvincias.json');
        $json = json_decode($json, true);

        foreach($json as $provincias){
            $provincia = Provincia::create(['descripcion' => $provincias['nombre']]);
            foreach ($provincias['ciudades'] as $ciudad) {
                Ciudad::create([
                    'provincias_id' => $provincia->id,
                    'descripcion' => $ciudad['nombre']
                ]);
            }
        }

    }
}
