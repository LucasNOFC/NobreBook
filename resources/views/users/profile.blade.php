@extends('layouts.app')
@section ('profile')
<div class="w-full min-h-screen bg-black">
    <div class="w-100 flex flex-col gap-5 items-center justify-center m-auto">
        <div class="mt-5">
            <img
                src="{{ Storage::url($user->profile_picture) }}"
                alt="Foto de perfil de {{$user->name}}"
                class="w-30 h-30 rounded-full border-2 border-cyan-700 shadow-[0px_0px_15px_5px_rgba(0,_157,_255,_0.25)]">
        </div>
        <div>
            <h1 class="text-4xl text-white">
                {{$user->name}}
            </h1>
        </div>
        @if (Auth::check() && $user->id === Auth::user()->id)
        <div class="flex items-center justify-center gap-2">
            <a href="/profile/{{Auth::user()->id}}/edit"
                class="p-2 
                bg-yellow-400 
                font-bold
                border-t-yellow-400 
                border-t-2
                border-b-2
                border-b-yellow-400 
                cursor-pointer
                hover:bg-yellow-600 
                hover:border-t-yellow-600 
                hover:border-b-yellow-600 
                transition-all">APLICAR_MODIFICAÇÕES</a>
            <a href="/"
                class="               
                font-bold
                cursor-pointer
                p-2
                border-t-2
                border-b-2
                border-t-purple-600 
                border-b-purple-600
                hover:bg-purple-600
                hover:border-t-purple-600
                hover:border-b-purple-600
                transition-all
                text-purple-400">VERIFICAR_PUBLICAÇÕES</a>
        </div>
        @endif
    </div>
</div>
@endsection