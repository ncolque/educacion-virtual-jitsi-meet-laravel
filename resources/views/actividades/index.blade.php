@extends('layouts.layout')

@section('icon_title')
    <i class="fas fa-school"></i>
@endsection

@section('title', 'Actividades')

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
                            <a class="btn btn-success btn-sm float-right" href="{{ route('actividads.create') }}">Crear
                                Actividad</a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>USUARIO</th>
                                        <th>ACTIVIDAD</th>
                                        <th>NOTA ACUMULADA</th>
                                        <th>NOTA - ACTIVIDAD</th>
                                        <th>NIVEL</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($acts as $act)
                                        <tr>
                                            <td>{{ $act->id }}</td>
                                            <td>{{ $act->user->name }} {{ $act->user->apellido }}</td>
                                            <td>{{ $act->nombre }}</td>
                                            <td>{{ $act->calificacion->nota }}</td>
                                            <td>{{ $act->nota }}</td>
                                            <td>{{ $act->horario_materia->dia }}</td>
                                            <td class="project-actions text-left">
                                                {{-- <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-eye"></i>
                                </a> --}}
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('actividads.edit', $act->id) }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('actividads.destroy', $act->id) }}" method="post"
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
