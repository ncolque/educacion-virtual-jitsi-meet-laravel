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
                            <h3 class="card-title">Nueva Inscripcion</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('horario-materias.update', $horarioMateria->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Materia</label>
                                    <input type="number" name="materia_id" value="{{ $horarioMateria->materia_id }}" class="form-control" placeholder="" required disabled>
                                </div>
                                <div class="form-group">
                                    <label>Horario</label>
                                    <input type="number" name="horario_id" value="{{ $horarioMateria->horario_id }}" class="form-control" placeholder="" required disabled>
                                </div>
                                <div class="form-group">
                                    <label>Dia</label>
                                    <select class="form-control" name="dia" required>
                                        <option value=""></option>
                                        <option value="Lunes">Lunes</option>
                                        <option value="Martes">Martes</option>
                                        <option value="Miercoles">Miercoles</option>
                                        <option value="Jueves">Jueves</option>
                                        <option value="Viernes">Viernes</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Cursos</label>
                                    <select class="form-control" name="curso_id" required>
                                        @foreach ($cursos as $curso)
                                        <option value="{{$curso->id}}">{{$curso->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Estudiantes</label>
                                    <select class="form-control" name="user_id" required>
                                        @foreach ($estudiantes as $est)
                                        <option value="{{$est->id}}">{{$est->name}} {{$est->apellido}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Modificar</button>
                                <a class="btn btn-secondary" href="{{ route('horario-materias.index') }}">Cancelar</a>
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
