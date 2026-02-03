@extends('layouts.app')
@section('accessUsers')
<div class="w-full h-screen flex justify-center items-center bg-[url('/storage/images/main_background.png')] bg-cover bg-center bg-no-repeat"">
    <form
        action=" {{ route('users.access') }}"
    method="POST"
    class="

        ">
    @csrf

    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div>
        {{$error}}
    </div>
    @endforeach
    @endif
    <div class="w-full p-5 gap-5 flex flex-col justify-center items-center">
        <div class="flex justify-center flex-col items-center gap-2 tracking-widest">
            <h1 class="text-4xl text-cyan-500 font-semibold [text-shadow:_2px_2px_12px_#00b3ff]">TECHWIND LOGIN</h1>
            <div class="w-42 border border-purple-600 rounded"></div>
            <p class="text-[12px] text-purple-800 font-semibold tracking-widest [text-shadow:_-1px_-1px_3px_#680684]">AUTENTICAÇÃO DO USUÁRIO</p>
        </div>
        <div class="flex flex-col justify-center items-center gap-10">
            <div class="w-full flex flex-col gap-2 justify-center items-center ">
                <div class="w-full  flex justify-between items-center">
                    <label for="email" class="w-full text-cyan-500 font-semibold ">EMAIL_DE_ACESSO</label>
                    <p class="text-[9px] text-end text-purple-800 [text-shadow:_-1px_-1px_3px_#680684] font-bold w-full">ID_001</p>
                </div>
                <input type="text" name="email" id="email" placeholder="LOGIN (EMAIL)" class=" p-2 w-96 border border-cyan-500 rounded 3xl text-yellow-300 font-semibold shadow-[0px_0px_10px_5px_rgba(66,_220,_219,_0.25)]  " required value="{{old('email')}}">
            </div>
            <div class="w-full flex flex-col gap-2 justify-center items-center ">
                <div class="w-full flex justify-between items-center">
                    <label for="password" class="w-full text-cyan-500 font-semibold ">SENHA DE ACESSO:</label>
                    <p class="text-[9px] text-end text-purple-800 [text-shadow:_-1px_-1px_3px_#680684]  font-bold w-full">ENCRYPTED ACCESS KEY</p>
                </div>
                <input type="password" name="password" placeholder="PASSWORD KEY" class=" p-2 w-96 border border-cyan-500 rounded 3xl text-yellow-300 font-semibold shadow-[0px_0px_10px_5px_rgba(66,_220,_219,_0.25)]  " required>
            </div>
        </div>
        <button class="w-96 p-4 bg-cyan-500 tracking-widest font-bold cursor-pointer transition-all hover:bg-cyan-600 mt-5 shadow-[0px_0px_10px_5px_rgba(66,_220,_219,_0.25)]">ACESSAR A REDE</button>
        <p class="text-gray-700 ">v4.05.87-stable_distribution</p>
    </div>
    </form>
</div>
@endsection