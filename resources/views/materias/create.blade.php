@extends('layouts.layout')

@section('icon_title')
    <i class="fas fa-school"></i>
@endsection

@section('title', 'Materias')

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
                            <h3 class="card-title">Nueva Materia</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('materias.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" name="nombre" class="form-control" placeholder=""
                                        {{-- class="@error('nombre') is-invalid @enderror" --}} required>
                                    {{-- @error('nombre')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror --}}
                                </div>
                                <div class="form-group">
                                    <label>Descripción</label>
                                    <input type="text" name="descripcion" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Profesor</label>
                                    <select class="form-control" name="user_id" required>
                                        @foreach ($profesores as $profe)
                                            <option value="{{ $profe->id }}">{{ $profe->name }} {{ $profe->apellido }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Horarios</label>
                                    @foreach ($horarios as $hora)
                                        <div class="form-check">
                                            <input type="checkbox" name="horarios[]" value="{{ $hora->id }}"
                                                class="form-check-input" id="{{ $hora->id }}">
                                            <label class="form-check-label"
                                                for="{{ $hora->id }}">{{ $hora->hora_inicio }} -
                                                {{ $hora->hora_fin }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('materias.index') }}">Cancelar</a>
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
