@extends('layouts.app')
@section ('profile')
<div class="main-container-custom">
    <div class="mt-5 container-fluid main-profile-custom p-3 rounded m-auto">
        <div class="w-20 h-100 main-profile-info-profile-custom">
            <img src="{{ Storage::url($user->profile_picture) }}" alt="Foto de perfil de {{$user->name}}" class="profile-picture">
        </div>
        <ul class="w-100 h-100 main-profile-info-list-custom">
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
    @if (Auth::check() && $user->id === Auth::user()->id)
    <div class="profile-info-custom container-fluid d-flex flex-column p-3 rounded m-auto">
        <h3>Informações</h3>
        <form
            action="{{ route('users.profile') }}"
            method="POST"
            class="container
            info-form-container-custom">
            @csrf

            @if ($errors->any())
            @foreach($errors->all() as $error)
            <div>
                {{$error}}
            </div>
            @endforeach
            @endif

            <div class="row more-info-container-custom">
                <div class="col input-info-custom">
                    <label for="fullname" class="label-user-info-custom">NOME COMPLETO</label>
                    <input type="text" name="fullname" class="input-user-info-custom" value="{{old('fullname', $profile->fullname ?? '')}}">
                </div>
                <div class="col input-info-custom">
                    <label for="title" class="label-user-info-custom">TÍTULO</label>
                    <input type="text" name="title" class="input-user-info-custom" value="{{old('title', $profile->title ?? '')}}">
                </div>
                <div class="col input-info-custom">
                    <label for="email" class="label-user-info-custom">EMAIL</label>
                    <input type="text" name="email" class="input-user-info-custom" value="{{old('email', $user->email ?? '')}}">
                </div>
                <div class="col input-info-custom">
                    <label for="adress" class="label-user-info-custom">ENDEREÇO</label>
                    <input type="text" name="adress" class="input-user-info-custom" value="{{old('adress', $profile->adress ?? '')}}">
                </div>
                <div class="input-info-bio-custom">
                    <label for="desc_bio" class="label-user-info-custom">BIOGRAFIA</label>
                    <input type="text" name="desc_bio" class="input-user-info-custom" value="{{old('desc_bio', $profile->desc_bio ?? '')}}">
                </div>
            </div>
            <button class="btn btn-primary">Salvar mudanças</button>
        </form>
    </div>
    @endif
</div>
@endsection