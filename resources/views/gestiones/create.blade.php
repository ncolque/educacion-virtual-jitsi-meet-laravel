@extends('layouts.layout')

@section('icon_title')
    <i class="fas fa-school"></i>
@endsection

@section('title', 'Gestiones')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card {{ $gestion->id ? 'card-primary' : 'card-success' }}">
                        <div class="card-header">
                            <h3 class="card-title">Nueva Gestión</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form @if ($gestion->id)
                            action="{{ route('gestions.update', $gestion->id) }}"
                        @else action="{{ route('gestions.store') }}" @endif method="POST"
                            enctype="multipart/form-data">
                            @csrf @if ($gestion->id) @method('PUT') @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" name="nombre" value="{{ old('nombre', $gestion->nombre) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Descripción</label>
                                    <input type="text" name="descripcion"
                                        value="{{ old('descripcion', $gestion->descripcion) }}" class="form-control"
                                        placeholder="" required>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit"
                                    class="btn {{ $gestion->id ? 'btn-primary' : 'btn-success' }}">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('gestions.index') }}">Cancelar</a>
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
