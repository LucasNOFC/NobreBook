@extends('layouts.app')
@section ('profile')
<div class="w-100 vh-100 d-flex flex-column align-items-center justify-content-center">
    <div class="w-50 h-30 mt-5 container-fluid d-flex flex-column p-3 bg-primary rounded m-auto">
        <h3>Usuário</h3>
        <div class="d-flex align-items-center justify-content-center profile-custom">
            <img
                src="{{ Storage::url($user->profile_picture) }}"
                alt="Foto de perfil de {{$user->name}}"
                class="profile-picture">
            <ul class="d-flex flex-column w-100 h-100 justify-around">
                <li class="list-unstyled list-inline">
                    <h3>
                        {{$user->name}}
                    </h3>
                </li>
                <li class="list-unstyled list-inline">
                    <p>
                        Conta criada em: {{$user->created_at}}
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <div class="w-50 h-50 container-fluid d-flex flex-column p-3 bg-secondary rounded m-auto">
        <h3>Informações</h3>
    </div>

</div>
@endsection