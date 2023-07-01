<?php

namespace App\Http\Livewire\Ciudades;

use Livewire\Component;
use App\Models\Ciudad;
use App\Models\Provincia;

class Nueva extends Component
{
    public $esNueva = true;
    public $errorMessage = '';
    public Ciudad $ciudad;
    public $provincias;

    public $provincia;

    protected $rules = [
        'ciudad.descripcion' => 'required|string|min:3',
        'provincia' => 'required|string|min:3'
    ];

    function mount(int $idCiudad = 0){
        $this->provincias = Provincia::all();

        $this->ciudad = new Ciudad();
        if ($idCiudad > 0){
            try {
                $this->ciudad = Ciudad::findOrFail($idCiudad);
                $this->esNueva = false;
            } catch (\Throwable $th) {
                $this->errorMessage = 'La ciudad solicitada no existe, intente crearla nuevamente.';
                //session()->flash('errorMessage', 'La ciudad solicitada no existe, intente crearla nuevamente.');
            }

            try {
                $this->provincia = Provincia::select('descripcion')->where('id', $this->ciudad->provincias_id)->firstOrFail()->descripcion;
            } catch (\Throwable $th) {
                $this->errorMessage = 'La provincia no existe, intente crearla nuevamente.';
            }
        }
    }

    public function render()
    {
        return view('livewire.ciudades.nueva')
        ->extends('layouts.app');
    }

    function guardar(){
        $this->validate();

        try {
            $prov = Provincia::where('descripcion', $this->provincia)->firstOrFail();
        } catch (\Throwable $th) {
            $this->errorMessage = 'La provincia seleccionada no existe, intente <a href="' . route('nueva-provincia') . '">crearla</a> e intente nuevamente.';
            return;
        }
        //dd($this->ciudad);
        $this->ciudad->provincias_id = $prov->id;
        $this->ciudad->save();
        session()->flash('message', 'La ciudad ' . $this->ciudad->descripcion . ' se creó correctamente.');
        return redirect(route('ciudades'));
    }
}
