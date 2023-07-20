@extends('layouts.layout')

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
                        <form action="{{ route('asistencias.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Estudiante</label>
                                    <select class="form-control" name="user_id" required>
                                        @foreach ($estudiantes as $est)
                                        <option value="{{$est->id}}">{{$est->name}} {{$est->apellido}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input type="date" name="fecha" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Asistencia</label>
                                    <select class="form-control" name="estado" required>
                                        <option value=""></option>
                                        <option value="Si asistio">Si asistio</option>
                                        <option value="No asistio">No asistio</option>
                                    </select>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleInputFile">Foto</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label>Nivel</label>
                                    <select class="form-control" name="horario_materia_id" required>
                                        @foreach ($horaMates as $horates)
                                        <option value="{{$horates->id}}">{{$horates->dia}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('asistencias.index') }}">Cancelar</a>
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
