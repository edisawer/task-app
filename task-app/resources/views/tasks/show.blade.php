@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Detalles de Tarea</div>
                <div class="panel-body mt-4">
                    <table class="table table-bordered">
                        <tr>
                            <th>Título</th>
                            <td>{{ $task->titulo }}</td>
                        </tr>
                        <tr>
                            <th>Descripción</th>
                            <td>{{ $task->descripcion }}</td>
                        </tr>
                        <tr>
                            <th>Estado</th>
                            <td>{{ $task->estado }}</td>
                        </tr>
                        <tr>
                            <th>Fecha Vencimiento</th>
                            <td>{{ $task->fecha_vencimiento }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('tasks.index') }}" class="btn btn-primary">Volver a Tasks</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection