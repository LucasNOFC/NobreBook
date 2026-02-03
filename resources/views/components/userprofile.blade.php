    <div class="p-5 h-screen bg-[url('/storage/images/main_background.png')] bg-cover bg-center bg-no-repeat">
        <form
            action="{{ route('users.profile', ['id' => $user->id]) }}"
            method="POST"
            class="">
            @csrf

            @if ($errors->any())
            @foreach($errors->all() as $error)
            <div>
                {{$error}}
            </div>
            @endforeach
            @endif

            <div class="flex flex-col justify-center items-center gap-2">
                <div class="self-start">
                    <a href="/profile/{{$user->id}}">
                        <img src="/storage/icons/back.png" alt="retorno" class="w-10 h-10">
                    </a>
                </div>
                <div class="w-full flex flex-col gap-2 p-2 justify-center items-center ">
                    <label for="fullname" class="w-100 pl-2 text-cyan-500 font-semibold">NOME_COMPLETO</label>
                    <input type="text" name="fullname"
                        class=" p-2 w-96  border border-cyan-500 rounded 3xl text-yellow-300 font-semibold shadow-[0px_0px_10px_5px_rgba(66,_220,_219,_0.25)] "
                        value="{{old('fullname', $profile->fullname ?? '')}}">
                </div>
                <div class="w-full flex flex-col gap-2 p-2 justify-center items-center ">
                    <label for="title" class="w-100 pl-2 text-cyan-500 font-semibold">TÍTULO_DO_USUÁRIO</label>
                    <input type="text" name="title"
                        class=" p-2 w-96  border border-cyan-500 rounded 3xl text-yellow-300 font-semibold shadow-[0px_0px_10px_5px_rgba(66,_220,_219,_0.25)] "
                        value="{{old('title', $profile->title ?? '')}}">
                </div>
                <div class="w-full flex flex-col gap-2 p-2 justify-center items-center ">
                    <label for="adress" class="w-100 pl-2 text-cyan-500 font-semibold">LOCALIZAÇÃO_DE_ORIGEM_USUÁRIO</label>
                    <input type="text" name="adress"
                        class=" 
                        p-2 w-96  border border-cyan-500 rounded 3xl text-yellow-300 font-semibold shadow-[0px_0px_10px_5px_rgba(66,_220,_219,_0.25)] "
                        value="{{old('adress', $profile->adress ?? '')}}">
                </div>
                <div class="w-full flex flex-col gap-2 p-2 justify-center items-center ">
                    <label for="desc_bio" class="w-100 pl-2 text-cyan-500 font-semibold">MINHA_HISTÓRIA</label>
                    <input type="text" name="desc_bio"
                        class=" p-2 w-96  border border-cyan-500 rounded 3xl text-yellow-300 font-semibold shadow-[0px_0px_10px_5px_rgba(66,_220,_219,_0.25)] "
                        value="{{old('desc_bio', $profile->desc_bio ?? '')}}">
                </div>
                <x-securityadvise />
                <button class="w-96 mt-2 bg-yellow-300 font-bold p-2 cursor-pointer hover:bg-yellow-400">REGISTRAR ALTERAÇÕES</button>
                <p class="text-gray-700 ">v4.05.87-stable_distribution</p>
            </div>
        </form>
    </div>