@extends('layouts.layout')

@section('icon_title')
    <i class="fas fa-school"></i>
@endsection

@section('title', 'Cursos')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Table</h3>
                            <a class="btn btn-success btn-sm float-right" href="{{ route('cursos.create') }}">Crear
                                Curso</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>NOMBRE</th>
                                        <th>DESCRIPCIÓN</th>
                                        <th>ASIGNACIÓN</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cursos as $curso)
                                        <tr>
                                            <td>{{ $curso->id }}</td>
                                            <td>{{ $curso->nombre }}</td>
                                            <td>{{ $curso->descripcion }}</td>
                                            <td>{{ $curso->asignacion }}</td>
                                            <td class="project-actions text-left">
                                                {{-- <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-eye"></i>
                                </a> --}}
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('cursos.edit', $curso->id) }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('cursos.destroy', $curso->id) }}" method="post"
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
