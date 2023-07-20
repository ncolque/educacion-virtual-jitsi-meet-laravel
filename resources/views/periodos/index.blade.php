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
                <div class="col-md-12">

                    @if (session('info'))
                        <div class="alert alert-{{ session('info.afirmacion') }}">
                            {{ session('info.mensaje') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Table</h3>
                            <a class="btn btn-success btn-sm float-right" href="{{ route('periodos.create') }}">Crear
                                Periodo</a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>GESTIÓN</th>
                                        <th>NOMBRE</th>
                                        <th>FECHA DE INICIO</th>
                                        <th>FECHA DE FIN</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($periodos as $periodo)
                                        <tr>
                                            <td>{{ $periodo->id }}</td>
                                            <td>{{ $periodo->gestion->nombre }}</td>
                                            <td>{{ $periodo->nombre }}</td>
                                            <td>{{ $periodo->fecha_ini }}</td>
                                            <td>{{ $periodo->fecha_ini }}</td>
                                            <td class="project-actions text-left">
                                                {{-- <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-eye"></i>
                                </a> --}}
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('periodos.edit', $periodo->id) }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('periodos.destroy', $periodo->id) }}" method="post"
                                                    style="display: inline">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{-- {{ $users->links() }} --}}
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
