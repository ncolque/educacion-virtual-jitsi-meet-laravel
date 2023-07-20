@extends('layouts.layout')

@section('icon_title')
    <i class="fas fa-school"></i>
@endsection

@section('title', 'Periodos')

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
                        <form action="{{ route('periodos.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Gestión</label>
                                    <select class="form-control" name="gestion_id" required>
                                        @foreach ($gestiones as $gestion)
                                        <option value="{{$gestion->id}}">{{$gestion->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <select class="form-control" name="nombre" required>
                                        <option value=""></option>
                                        <option value="1er Trimestre">1er Trimestre</option>
                                        <option value="2do Trimestre">2do Trimestre</option>
                                        <option value="3er Trimestre">3er Trimestre</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Fecha de inicio</label>
                                    <input type="date" name="fecha_ini" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Fecha de fin</label>
                                    <input type="date" name="fecha_fin" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('periodos.index') }}">Cancelar</a>
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
