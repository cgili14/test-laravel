<div>
    <x-header>
        Provincias
        <a class="btn btn-sm btn-primary text-end ms-4" href="{{ route('nueva-provincia') }}">Nueva provincia</a>
    </x-header>

    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <x-tabla :encabezados="$encabezado">
        @foreach ($provincias as $provincia)
            <tr>
                <th>{{ $provincia->id }}</th>
                <th>{{ $provincia->descripcion }}</th>
            </tr>
        @endforeach
    </x-tabla>
    {{ $provincias->links() }}

    <x-botonNuevo link="{{ route('nueva-provincia') }}" />
</div>
