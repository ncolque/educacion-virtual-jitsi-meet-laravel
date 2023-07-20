@extends('layouts.layout')

@section('icon_title')
    <i class="fas fa-school"></i>
@endsection

@section('title', 'Cursos')

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
                        <form action="{{ route('cursos.update', $curso->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" name="nombre" value="{{ $curso->nombre }}" class="form-control"
                                        placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Descripción</label>
                                    <input type="text" name="descripcion" value="{{ $curso->descripcion }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Select</label>
                                    <select class="form-control" name="asignacion" value="{{ $curso->asignacion }}"
                                        required>
                                        <option value=""></option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Materias</label>
                                    @foreach ($materias as $materia)
                                        <div class="form-check">
                                            <input type="checkbox" name="materias[]" value="{{ $materia->id }}"
                                                class="form-check-input" id="{{ $materia->nombre }}">
                                            <label class="form-check-label"
                                                for="{{ $materia->nombre }}">{{ $materia->nombre }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Modificar</button>
                                <a class="btn btn-secondary" href="{{ route('cursos.index') }}">Cancelar</a>
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
