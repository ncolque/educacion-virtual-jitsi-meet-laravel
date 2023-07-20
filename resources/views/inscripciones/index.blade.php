@extends('layouts.layout')

@section('icon_title')
    <i class="fas fa-school"></i>
@endsection

@section('title', 'Pre-Inscripcion')

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
                            <a class="btn btn-success btn-sm float-right" href="{{ route('inscripcions.create') }}">Crear
                                Inscripción</a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>USUARIO</th>
                                        <th>CURSO</th>
                                        <th>GESTIÓN</th>
                                        <th>FECHA</th></th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inscris as $ins)
                                        <tr>
                                            <td>{{ $ins->id }}</td>
                                            <td>{{ $ins->user->name }}</td>
                                            <td>{{ $ins->curso->nombre }}</td>
                                            <td>{{ $ins->gestion->nombre }}</td>
                                            <td>{{ $ins->fecha }}</td>
                                            <td class="project-actions text-left">
                                                {{-- <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-eye"></i>
                                </a> --}}
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('inscripcions.edit', $ins->id) }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('inscripcions.destroy', $ins->id) }}" method="post"
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
