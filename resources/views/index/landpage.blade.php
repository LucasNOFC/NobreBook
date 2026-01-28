@extends('layouts.app')
@section('landpage')
<main class="w-100 vh-100">
    <div class="d-flex 
        flex-column 
        justify-content-center
         align-items-center 
         min-vh-100 
         margin-auto">
        @auth
            <h1>Olá! {{$user->name}}</h1>
        @endauth
        @guest
        <h3>Cadastre para acessar o NobreBook!</h3>
        <p>Sua rede social mais direta.</p>
        @endguest
    </div>
</main>
@endsection