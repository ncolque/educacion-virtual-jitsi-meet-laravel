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
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Nuevo Horario</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('horarios.update', $horario->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Hora de Inicio</label>
                                    <input type="time" name="hora_inicio" value="{{ $horario->hora_inicio }}" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Hora de Fin</label>
                                    <input type="time" name="hora_fin" value="{{ $horario->hora_fin }}" class="form-control" placeholder="" required>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Roles</label>
                                    @foreach ($roles as $rol)
                                        <div class="form-check">
                                            <input type="checkbox" name="roles[]" value="{{ $rol->id }}"
                                                class="form-check-input" id="{{ $rol->name }}">
                                            <label class="form-check-label"
                                                for="{{ $rol->name }}">{{ $rol->name }}</label>
                                        </div>
                                    @endforeach
                                </div> --}}
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Modificar</button>
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
