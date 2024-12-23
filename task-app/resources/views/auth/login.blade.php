@extends('layouts.app')

@section('content')
<div class="container my-auto mx-auto w-50">
    <h2 class="mt-4">Inicio de Sesión</h2>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group mt-2">
            <label for="email">Correo</label>
            <input type="email" name="email" id="email" class="form-control" required autofocus>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group mt-4">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control" required>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group mt-4">
            <div class="form-check">
                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                <label for="remember" class="form-check-label">Recordar</label>
            </div>
        </div>
        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>
@endsection