@extends('layouts.layout')

@section('icon_title')
    <i class="fas fa-school"></i>
@endsection

@section('title', 'Horarios')

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
                            <h3 class="card-title">Nuevo Horario</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('horarios.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Hora de Inicio</label>
                                    <input type="time" name="hora_inicio" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Hora de Fin</label>
                                    <input type="time" name="hora_fin" class="form-control" placeholder="" required>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Asignar horario a materias</label>
                                    @foreach ($materias as $materia)
                                        <div class="form-check">
                                            <input type="checkbox" name="materias[]" value="{{ $materia->id }}"
                                                class="form-check-input" id="{{ $materia->nombre }}">
                                            <label class="form-check-label"
                                                for="{{ $materia->nombre }}">{{ $materia->nombre }}</label>
                                        </div>
                                    @endforeach
                                </div> --}}
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('horarios.index') }}">Cancelar</a>
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
