@extends('layouts.layout')

@section('icon_title')
    <i class="fas fa-school"></i>
@endsection

@section('title', 'Inscripciones')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Nuevo Registro</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('inscripcions.update', $inscripcion->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Usuario</label>
                                    <select class="form-control" name="user_id" required>
                                        @foreach ($usuarios as $usuario)
                                            <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Cursos</label>
                                    <select class="form-control" name="curso_id" required>
                                        @foreach ($cursos as $curso)
                                            <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Gestión</label>
                                    <select class="form-control" name="gestion_id" required>
                                        @foreach ($gestiones as $gestion)
                                            <option value="{{ $gestion->id }}">{{ $gestion->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input type="date" name="fecha" value="{{ $inscripcion->fecha }}"
                                        class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Modificar</button>
                                <a class="btn btn-secondary" href="{{ route('inscripcions.index') }}">Cancelar</a>
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
