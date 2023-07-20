@extends('layouts.layout')

@section('icon_title')
    <i class="fas fa-school"></i>
@endsection

@section('title', 'Inscripciones')

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
                        {{-- <div class="card-header">
                            <h3 class="card-title">Table</h3>
                            <a class="btn btn-success btn-sm float-right" href="{{ route('materias.create') }}">Crear
                                Materia</a>
                        </div> --}}

                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>ESTUDIANTE</th>
                                        <th>CURSO</th>
                                        <th>MATERIA</th>
                                        <th>HORARIO</th>
                                        <th>DIA</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ofertas as $oferta)
                                        <tr>
                                            <td>{{ $oferta->id }}</td>
                                            <td>
                                                @if ($oferta->user_id)
                                                    {{ $oferta->user->name }} {{ $oferta->user->apellido }}
                                                @else
                                                    No definido
                                                @endif
                                            </td>
                                            <td>
                                                @if ($oferta->curso_id)
                                                    {{ $oferta->curso->nombre }}
                                                    {{-- {{ $oferta->curso_id }} --}}
                                                @else
                                                    No definido
                                                @endif
                                            </td>
                                            <td>{{ $oferta->materia->nombre }}</td>
                                            <td>{{ $oferta->horario->hora_inicio }}</td>
                                            <td>{{ $oferta->dia }}</td>
                                            <td class="project-actions text-left">
                                                {{-- <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-eye"></i>
                                </a> --}}
                                                <a class="btn btn-info btn-sm"
                                                    href="{{ route('horario-materias.edit', $oferta->id) }}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('horario-materias.destroy', $oferta->id) }}"
                                                    method="post" style="display: inline">
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
