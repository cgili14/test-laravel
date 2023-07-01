<div>
    <table class="table table-striped">
        <thead>
            <tr>
                @foreach($encabezados as $encabezado)
                    <th scope="col">{{ $encabezado }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>
