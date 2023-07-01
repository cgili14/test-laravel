<div>
    <x-header>{{ $esNueva ? 'Nueva' : 'Editando' }} ciudad</x-header>

    @if (session()->has('errorMessage') || $errorMessage !== '')
        <div class="alert alert-danger" role="alert">
            {!! session('errorMessage' , $errorMessage) !!}
        </div>
    @endif

    <x-formulario submit='guardar'>
        <div class="form-group mb-2">
            <label for="exampleInputEmail1">Descripcion</label>
            <input
                wire:model.lazy="ciudad.descripcion"
                type="text"
                class="form-control @error('ciudad.descripcion') border-danger @enderror"
                id="descripcionCiudad"
                placeholder="Ingresa el nombre de la ciudad ej.: Laboulaye"
            >
            @error('ciudad.descripcion') <p class="text-danger p-0 m-0">{{ $message }}</p> @enderror
        </div>

        <label for="provincia" class="form-label">Provincia</label>
        <input
            wire:model.lazy="provincia"
            class="form-control @error('provincia') border-danger @enderror"
            list="provinciaOptions"
            id="provincia"
            placeholder="Buscar..."
        >
        <datalist id="provinciaOptions">
            @foreach($provincias as $provincia)
                <option value='{{ $provincia->descripcion }}'>
            @endforeach
        </datalist>
        @error('provincia') <p class="text-danger p-0 m-0">{{ $message }}</p> @enderror
    </x-formulario>
</div>
