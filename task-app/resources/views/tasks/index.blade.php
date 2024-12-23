@extends('layouts.app')

@section('content')
<div class="container">
        
    <div class="row">
        <div class="col-md-12">
            
            <div class="row">
                <div class="col">
                    <h1 class="mt-4 mb-4">Tasks</h1>
                </div>
                <div class="col">
                    @auth
                    <form class="float-end d-inline-block" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-secondary mt-4">Salir</button>
                    </form>
                    @endauth
                </div>
                
            </div>
            
            <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-4 mt-4">Crear Tarea</a>

            <form class="float-end mt-4 w-50 text-end" action="{{ route('tasks.index') }}" method="GET">
                <input class="w-50" type="search" name="search" placeholder="Buscar por título o estado..." value="{{ request('search') }}"/>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
            
            <table class="table table-bordered mt-2">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Descripción</th>
                        <th>Fecha Vencimiento</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->titulo }}</td>
                        <td>{{ $task->descripcion }}</td>
                        <td>{{ $task->fecha_vencimiento }}</td>
                        <td>{{ $task->estado }}</td>
                        <td>
                            <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $tasks->links() }}

        </div>
    </div>
</div>
@endsection