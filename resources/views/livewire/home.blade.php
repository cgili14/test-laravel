<div class="text-center mt-5">
    <div class="card m-auto" style="max-width: 38rem;">
        <div class="card-header h3">
            Provincias
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <a class="btn btn-seccondary w-100" href="{{ route('provincias') }}">Listado de provincias</a>
            </li>
            <li class="list-group-item">
                <a class="btn btn-seccondary w-100" href="{{ route('nueva-provincia') }}">Nueva provincia</a>
            </li>
        </ul>
    </div>

    <div class="card m-auto mt-3" style="max-width: 38rem;">
        <div class="card-header h3">
            Ciudades
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <a class="btn btn-seccondary w-100" href="{{ route('provincias') }}">Listado de ciudades</a>
            </li>
            <li class="list-group-item">
                <a class="btn btn-seccondary w-100" href="{{ route('nueva-ciudad') }}">Nueva ciudad</a>
            </li>
        </ul>
    </div>
</div>
