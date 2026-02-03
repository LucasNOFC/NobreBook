    @section ('header')
    @if (Auth::check())
    <header class=" w-full bg-black flex items-center justify-between p-3 border-b-cyan-800 border-2">
        <div class="flex gap-2">
            <a href="/profile/{{$user->id}}">
                <img src="{{ Storage::url($user->profile_picture)  }}"
                    alt=""
                    class="
                    w-12
                    h-12
                    rounded-full
                    border-2
                    border-cyan-600
                    shadow-[0px_0px_20px_5px_rgba(66,_220,_219,_0.15)]">
            </a>
            <div class="flex flex-col items-start text-startp-2">
                <p class="text-cyan-500 font-semibold">{{$user->name}}</p>
                <p class="text-yellow-500">Status: Online</p>
            </div>
        </div>

        <div class="">
            <form
                action="{{ route('users.loggout') }}"
                method="POST">
                @csrf
                <div class="flex gap-2 ">
                    <a href="/">
                        <img src="/storage/icons/homepage.png" alt="landpage" class="w-8 h-8 cursor-pointer">
                    </a>
                    <button type="submit" class="w-8 h-8 cursor-pointer">
                        <img src="/storage/icons/loggout.png" alt="loggout">
                    </button>
                </div>
            </form>
        </div>
        @endif
        </div>
    </header>
    @endsection