@extends ('components.head')
@extends ('components.header')
@section('main')
<x-header :user="auth()->user()"/>
<body>
    <main class="w-full min-h-screen">
        
        @yield('index')
        @yield('landpage')
        @yield('createUser')
        @yield('accessUsers')
        @yield('profile')
        @yield('profileuser')
        @vite('resources/js/app.js')
    </main>
</body>

@endsection