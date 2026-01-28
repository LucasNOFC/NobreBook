@extends ('components.head')
@extends ('components.header')
@section('main')

<body>
    <main class="w-100 vh-100">
        <div class="d-flex 
        flex-column 
        justify-content-center
         align-items-center 
         min-vh-100 
         margin-auto">
            @yield('index')
            @yield('landpage')
            @yield('createUser')
            @yield('accessUsers')
            @yield('profile')
            @vite('resources/js/app.js')
        </div>
    </main>
    @endsection