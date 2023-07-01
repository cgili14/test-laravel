<?php

namespace App\Http\Livewire\Provincias;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Provincia;

class Listado extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $encabezado = ['ID', 'Descripcion'];

    public function render()
    {
        return view('livewire.provincias.listado', [
            'provincias' => Provincia::paginate(20)
        ])
        ->extends('layouts.app');
    }
}
