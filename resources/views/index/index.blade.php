@extends('layouts.app')

@section('landpage')
<div class="w-full h-full bg-[url('/storage/images/main_background.png')] bg-cover bg-center bg-no-repeat">
    <div class="flex h-full items-center justify-center m-auto">
        @auth
            <x-mainpage/>
        @endauth
        @guest
            <x-landpage/>
        @endguest
    </div>
</div>
@endsection