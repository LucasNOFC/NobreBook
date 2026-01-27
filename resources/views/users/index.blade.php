@extends('layouts.app')
@section('index')
<div class="w-100 vh-100">
    @if ($size > 1)
    <h1 class="h2">Olá, temos {{$size}} usuários cadastrados na base.</h1>
    @else
    <h1 class="h2">Olá, temos {{$size}} usuário cadastrado na base.</h1>
    @endif
    <h2>Usuários abaixo:</h2>
    @foreach ($users as $user)
    <p>Nome:{{$user->name}}</p>
    @endforeach
</div>
@endsection