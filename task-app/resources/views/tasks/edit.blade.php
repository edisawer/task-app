@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-2 mb-4">Editar Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group mt-4">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $task->titulo }}" required>
        </div>
        
        <div class="form-group mt-4">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" required>{{ $task->descripcion }}</textarea>
        </div>

        <div class="form-group mt-4 w-25">
            <label for="estado">Estado</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="1" {{ $task->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="2" {{ $task->estado == 'en_progreso' ? 'selected' : '' }}>En Progreso</option>
                <option value="3" {{ $task->estado == 'completado' ? 'selected' : '' }}>Completado</option>
            </select>
        </div>

        <div class="form-group mt-4 w-25">
            <label for="fecha_vencimiento">Fecha de Vencimiento</label>
            <input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" value="{{ $task->fecha_vencimiento }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary mt-4">Guardar Cambios</button>
    </form>
</div>
@endsection