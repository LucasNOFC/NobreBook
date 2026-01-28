@extends('layouts.app')
@section('accessUsers')
<div class="w-100 vh-100">
    <form
        action="{{ route('users.access') }}"
        method="POST"
        class="mt-5 w-50 m-auto vh-100 d-flex flex-column align-items-center justify-content-center">
        @csrf

        @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
                {{$error}}
            </div>
        @endforeach
        @endif
        <div class="d-flex flex-column justify-content-center align-items-center min-vh-100 margin-auto">
            <div class="d-flex w-100 flex-column align-items-center">
                <label for="email" class="w-100">Email do usuário:</label>
                <input type="text" name="email" id="email" class="w-100" required value="{{old('email')}}">
            </div>
            <div class="d-flex w-100 flex-column align-items-center">
                <label for="password" class="w-100">Senha do usuário:</label>
                <input type="password" name="password" class="w-100" required>
            </div>
            <button class="btn btn-primary w-75 mt-3">Login</button>
        </div>
    </form>
</div>
@endsection