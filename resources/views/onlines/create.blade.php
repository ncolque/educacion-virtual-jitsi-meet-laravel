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
                            <h3 class="card-title">Nueva Reunión</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('onlines.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                {{-- <div class="form-group">
                                    <label>Materia</label>
                                    <select class="form-control" name="materia_id">
                                        @foreach ($materias as $materia)
                                            <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <div class="form-group">
                                    <label>Titulo</label>
                                    <input type="text" name="titulo" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input type="date" name="fecha" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Hora</label>
                                    <input type="time" name="hora" class="form-control" placeholder="">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('onlines.index') }}">Cancelar</a>
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
