@extends('layouts.layout')

@section('icon_title')
    <i class="fas fa-school"></i>
@endsection

@section('title', 'Asistencias')

@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects</h3>

                <div class="card-tools">
                    {{-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button> --}}
                    <a class="btn btn-success btn-sm float-right" href="{{ route('asistencias.create') }}">Crear
                        Asistencia</a>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">#</th>
                            <th style="width: 20%">Estudiante
                            </th>
                            {{-- <th style="width: 10%">Fecha
                            </th> --}}
                            <th style="width: 8%" class="text-center">Estado
                            </th>
                            {{-- <th style="width: 8%" class="text-center">Nivel
                            </th> --}}
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($asistencias as $asistencia)
                            <tr>
                                <td>{{ $asistencia->id }}</td>
                                <td>
                                    <a>{{ $asistencia->nombre }}</a>
                                    <br />
                                    <small>{{ $asistencia->fecha }}</small>
                                </td>
                                {{-- <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="{{ asset('storage/fotos/'. $user->photo)}}">
                                    </li>
                                    </ul>
                                </td> --}}
                                <td class="project-state">
                                    @if ($asistencia->estado == 'Si asistio')
                                        <span class="badge badge-success">{{ $asistencia->estado }}</span>
                                    @else
                                        <span class="badge badge-danger">{{ $asistencia->estado }}</span>
                                    @endif
                                </td>
                                <td class="project-actions text-right">
                                    {{-- <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder"></i>
                                    View
                                </a> --}}
                                    <a class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    {{-- <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash"></i>
                                    Delete
                                </a> --}}
                                    <form action="{{ route('asistencias.destroy', $asistencia->id) }}" method="post"
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
        </div>
    </section>
    <!-- /.content -->
@endsection
