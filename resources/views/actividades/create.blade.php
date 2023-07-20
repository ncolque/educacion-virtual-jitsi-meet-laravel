@extends('layouts.layout')

@section('icon_title')
    <i class="fas fa-school"></i>
@endsection

@section('title', 'Actividades')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Nuevo Registro</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('actividads.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Estudiante</label>
                                    <select class="form-control" name="user_id" required>
                                        @foreach ($usuarios as $usuario)
                                            <option value="{{ $usuario->id }}">{{ $usuario->name }} {{ $usuario->apellido }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" name="nombre" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Calificación</label>
                                    <select class="form-control" name="calificacion_id" required>
                                        @foreach ($cals as $cal)
                                            <option value="{{ $cal->id }}">{{ $cal->tipo }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nota</label>
                                    <input type="number" name="nota" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Nivel</label>
                                    <select class="form-control" name="horario_materia_id" required>
                                        @foreach ($horaMates as $horates)
                                            <option value="{{ $horates->id }}">{{ $horates->dia }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('actividads.index') }}">Cancelar</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
