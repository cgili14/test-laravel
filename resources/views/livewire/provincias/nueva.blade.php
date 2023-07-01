<div>
    <x-header>{{ $esNueva ? 'Nueva' : 'Editando' }} provincia</x-header>

    @if (session()->has('errorMessage'))
        <div class="alert alert-danger" role="alert">
            {{ session('errorMessage') }}
        </div>
    @endif

    <x-formulario submit='guardar'>
        <div class="form-group">
            <label for="exampleInputEmail1">Descripcion</label>
            <input
                wire:model.lazy="provincia.descripcion"
                type="text"
                class="form-control @error('provincia.descripcion') border-danger @enderror"
                id="descripcionCiudad"
                placeholder="Ingresa el nombre de la ciudad ej.: Laboulaye"
            >
            @error('provincia.descripcion') <p class="text-danger p-0 m-0">{{ $message }}</p> @enderror
        </div>
    </x-formulario>
</div>
