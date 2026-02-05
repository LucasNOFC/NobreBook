@extends('layouts.app')
@section('createUser')
<div class="w-full min-h flex justify-center items-center bg-[url('/storage/images/main_background.png')] bg-cover bg-center bg-no-repeat">
    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data"
        class="
        flex 
        flex-col 
        items-center
        p-5
        ">
        @csrf

        @if ($errors->any())
        @foreach($errors->all() as $error)
        <div>
            {{$error}}
        </div>
        @endforeach
        @endif
        <div class="self-start">
            <a href="/">
                <img src="/storage/icons/back.png" alt="retorno" class="w-10 h-10">
            </a>
        </div>
        <div class="       
         flex 
         flex-col 
         items-center
         gap-5">
            <h2 class="text-yellow-300 font-semibold tracking-widest">-SISTEMA CRIAÇÃO</h2>
            <div class="w-full p-2">
                <div class="p-2 flex items-center justify-center flex-col gap-2">
                    <input type="file" name="profile_picture" id="profile_picture" class="hover:cursor-pointer w-100 hidden" required>
                    <div class="border-3 border-cyan-400 w-35 h-35 rounded flex items-center justify-center">
                        <div class="border-3 border-dotted border-cyan-400 w-30 h-30 rounded-full flex items-center justify-center">
                            <div class="border-3 border-cyan-600 rounded-full w-22 h-22 bg-cyan-600/50 flex items-center justify-center cursor-pointer">
                                <label for="profile_picture"><img src="/storage/icons/input_camera.png" class="w-12  cursor-pointer" id="preview" alt="profile-picture-input-logo"></label>
                            </div>
                        </div>
                    </div>
                    <label for="profile_picture" class="border rounded bg-cyan-300/25 border-cyan-500 p-2 flex items-center justify-center font-semibold text-cyan-400 [text-shadow:_0px_0px_20px_5px_rgba(66,_220,_219,_0.5)] cursor-pointer hover:bg-cyan-600/25 transition-all">ESCANEAR IMAGEM</label>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center gap-1">
                <div class="flex flex-col justify-start w-96 gap-2">
                    <h1 class="w-42 italic font-semibold text-yellow-300 [text-shadow:_1px_2px_0px_#a309ce]">PROTOCOLO DE INICIALIZAÇÃO</h1>
                    <div class="border-2 border-purple-600 w-20 rounded-4xl shadow-[1px_-2px_14px_#a309ce]"></div>
                </div>
                <div class="w-full flex flex-col gap-2 p-2 justify-center items-center ">
                    <label for="username" class="w-100 pl-2 text-cyan-500 font-semibold">NOME_DE_IDENTIFICAÇÃO:</label>
                    <input type="text" name="name" placeholder="APELIDO" id="username" class=" p-2 w-96  border border-cyan-500 rounded 3xl text-yellow-300 font-semibold shadow-[0px_0px_10px_5px_rgba(66,_220,_219,_0.25)] " required value="{{old('name')}}">
                </div>
                <div class="w-full flex flex-col gap-2 p-2 justify-center items-center ">
                    <label for="email" class="w-100 pl-2 text-cyan-500 font-semibold ">EMAIL_DO_USUÁRIO:</label>
                    <input type="text" name="email" placeholder="EMAIL" id="email" class=" p-2 w-96  border border-cyan-500 rounded 3xl text-yellow-300 font-semibold shadow-[0px_0px_10px_5px_rgba(66,_220,_219,_0.25)] " required value="{{old('email')}}">
                </div>
                <div class="w-full flex flex-col gap-2 p-2 justify-center items-center ">
                    <label for="password" class="w-100 pl-2 text-cyan-500 font-semibold ">SENHA_DE_ACESSO:</label>
                    <input type="password" name="password" placeholder="SENHA" class=" p-2 w-96  border border-cyan-500 rounded 3xl text-yellow-300 font-semibold shadow-[0px_0px_10px_5px_rgba(66,_220,_219,_0.25)] " required>
                </div>
                <div class="w-full flex flex-col gap-2 p-2 justify-center items-center ">
                    <label for="password_confirmation" class="w-100 pl-2 text-cyan-500 font-semibold ">CONFIRMAÇÃO_SENHA_ACESSO:</label>
                    <input type="password" name="password_confirmation" placeholder="CONFIRMAR SENHA" class=" p-2 w-96  border border-cyan-500 rounded 3xl text-yellow-300 font-semibold shadow-[0px_0px_10px_5px_rgba(66,_220,_219,_0.25)] " required>
                </div>
            </div>

            <x-securityadvise />

            <button class="w-96 bg-yellow-400 p-3 font-semibold cursor-pointer shadow-[1px_25px_89px_-15px_rgba(255,_238,_0,_0.8)] cursor-pointer hover:bg-yellow-500 transition-all">INICIALIZAR CONEXÃO</button>
            <p class="text-gray-700 ">v4.05.87-stable_distribution</p>
        </div>
    </form>
</div>
@endsection