<?php

namespace App\Http\Livewire\Ciudades;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Ciudad;

class Listado extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $encabezado = ['ID', 'Descripcion', 'Provincia'];

    public function render()
    {
        return view('livewire.ciudades.listado', [
            'ciudades' => Ciudad::paginate(20)
        ])
        ->extends('layouts.app');
    }
}
