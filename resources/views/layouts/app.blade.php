<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('APP.NAME') }}</title>

    <script src="{{ asset('build/app2.js') }}" defer></script>

    <link href="{{ asset('build/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body>
    @livewireScripts
    <nav class="navbar bg-dark navbar-expand-lg .bg-body-tertiary mb-3" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Test</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Cambiar navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('provincias') ? 'active' : '' }}" href="{{ route('provincias') }}">Provincias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('ciudades') ? 'active' : '' }}" href="{{ route('ciudades') }}">Ciudades</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        @yield('content')
    </main>
</body>
</html>
