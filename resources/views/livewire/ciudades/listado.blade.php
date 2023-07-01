<div>
    <x-header>
        Ciudades
        <a class="btn btn-sm btn-primary text-end ms-4" href="{{ route('nueva-ciudad') }}">Nueva ciudad</a>
    </x-header>

    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <x-tabla :encabezados="$encabezado">
        @foreach ($ciudades as $ciudad)
            <tr>
                <th>{{ $ciudad->id }}</th>
                <th>{{ $ciudad->descripcion }}</th>
                <th>{{ $ciudad->provincia->descripcion }}</th>
            </tr>
        @endforeach
    </x-tabla>
    {{ $ciudades->links() }}

    <x-botonNuevo link="{{ route('nueva-ciudad') }}" />
</div>
