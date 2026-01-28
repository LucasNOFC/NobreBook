    @section ('header')
    <header class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">NobreBook</a>
        </div>
        @if (Auth::check())
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item d-flex">
                    <a href="/profile/{{$user->id}}" class="nav-link">Perfil</a>
                    <form
                        action="{{ route('users.loggout') }}"
                        method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            Sair
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        @else
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item d-flex">
                    <a href="register" class="nav-link">Criar conta</a>
                    <a href="login" class="nav-link">Login</a>
                </li>
            </ul>
        </div>
        @endif
        </div>
    </header>
    @endsection