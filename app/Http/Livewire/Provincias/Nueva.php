<?php

namespace App\Http\Livewire\Provincias;

use Livewire\Component;
use App\Models\Provincia;

class Nueva extends Component
{
    public $esNueva = true;
    public $errorMessage = '';
    public Provincia $provincia;

    protected $rules = [
        'provincia.descripcion' => 'required|string|min:3'
    ];

    public function mount(int $idProvincia = 0){
        $this->provincia = new Provincia();
        if($idProvincia > 0){
            try {
                $this->provincia = Provincia::findOrFail($idProvincia);
                $this->esNueva = false;
            } catch (\Throwable $th) {
                $this->errorMessage = 'La provincia solicitada no existe, intente crearla nuevamente.';
                session()->flash('errorMessage', 'La provincia solicitada no existe, intente crearla nuevamente.');
            }
        }
    }

    public function render()
    {
        return view('livewire.provincias.nueva')
        ->extends('layouts.app');
    }

    function guardar(){
        $this->provincia->save();
        session()->flash('message', 'La provincia ' . $this->provincia->descripcion . ' se creó correctamente.');
        return redirect(route('provincias'));
    }
}
