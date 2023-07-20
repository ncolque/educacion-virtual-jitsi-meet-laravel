@extends('layouts.layout')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Table</h3>
                            <a class="btn btn-success btn-sm float-right" href="{{ route('onlines.create') }}">Crear
                                Reunión</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>TITULO</th>
                                        <th>FECHA</th>
                                        <th>HORA</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($onlines as $online)
                                        <tr>
                                            <td>{{ $online->id }}</td>
                                            <td>{{ $online->titulo }}</td>
                                            <td>{{ $online->fecha }}</td>
                                            <td>{{ $online->hora }}</td>
                                            <td class="project-actions text-left">
                                                {{-- <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-eye"></i>
                                </a> --}}
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('onlines.classonline', $online) }}">
                                                    <i class="fas fa-desktop"></i> Unirse
                                                </a>
                                                {{-- <a class="btn btn-primary btn-sm"
                                                    href="{{ route('onlines.edit', $online->id) }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a> --}}
                                                <form action="{{ route('onlines.destroy', $online->id) }}" method="post"
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
