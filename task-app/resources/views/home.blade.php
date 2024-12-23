@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="d-flex justify-content-end mt-2">
        <a href="{{ route('register') }}" class="btn btn-primary mr-2">Registro</a>
        <a href="{{ route('login') }}" class="btn btn-secondary ms-2">Login</a>
    </div>
    <h2 class="h-75 mt-4 align-content-center text-center">Inicia Sesión para ver las Tareas</h2>
</div>
@endsection