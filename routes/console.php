<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

use App\Models\Provincia;
use App\Models\Ciudad;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('init', function (){
    Artisan::call('migrate:fresh');
    Artisan::call('db:seed --class=CiudadProvinciaSeeder');

    $this->info('Proceso finalizado correctamente');
});

Artisan::command('create:ciudad {nombre} {provincia}', function (string $nombre, string $provincia){
    try {
        $provincia = Provincia::where('descripcion', $provincia)->firstOrFail();
    } catch (\Throwable $th) {
        $provincia = Provincia::create(['descripcion' => $provincia]);
    }

    Ciudad::create([
        'provincias_id' => $provincia->id,
        'descripcion' => $nombre,
    ]);

    $this->info('Ciudad creada correctamente');
});
