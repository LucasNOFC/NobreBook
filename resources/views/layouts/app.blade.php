<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/scss/app.scss')
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
</head>

<body>
    <header class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">NobreBook</a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="register" class="nav-link">Criar conta</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    @yield('index')
    @yield('landpage')
    @yield('createUser')
    @yield('accessUsers')
    @vite('resources/js/app.js')
    <footer class="bg-dark text-light mt-5">
        <div class="container py-4">
            <div class="d-flex justify-content-center align-center gap-2 margin-auto">
                    <h5>NobreBook</h5>
            </div>
        </div>
    </footer>
</body>

</html>