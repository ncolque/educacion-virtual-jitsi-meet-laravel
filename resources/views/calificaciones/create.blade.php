@extends('layouts.layout')

@section('icon_title')
    <i class="fas fa-school"></i>
@endsection

@section('title', 'Calificaciones')

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
                        <form action="{{ route('calificacions.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Periodo</label>
                                    <select class="form-control" name="periodo_id" required>
                                        @foreach ($periodos as $periodo)
                                        <option value="{{$periodo->id}}">{{$periodo->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <input type="text" name="tipo" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Nota</label>
                                    <input type="number" name="nota" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('calificacions.index') }}">Cancelar</a>
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
