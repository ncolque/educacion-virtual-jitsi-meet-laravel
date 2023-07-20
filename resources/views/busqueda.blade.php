@extends('layouts.layout-secondary')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection

@section('title', 'U.E Nestor Paz Zamora') --}}

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <h2 class="text-center display-4">Busqueda</h2>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="{{ route('buscar.resultado') }}" method="GET">
                        @csrf
                        <div class="input-group input-group-lg">
                            <input type="search" name="texto" class="form-control form-control-lg"
                                placeholder="Escriba sus palabras clave aquí" value="">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-10 offset-md-1">
                    {{-- Hay {{ $searchResults->count() }} resultados encontrados. --}}
                    <div class="list-group">
                        @foreach ($searchResults->groupByType() as $type => $modelSearchResults)
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col px-4">
                                        <div>
                                            <div class="float-right"> {{ date('Y-m-d') }} </div>
                                            <h3>{{ ucfirst($type) }}</h3>
                                            @foreach ($modelSearchResults as $searchResult)
                                                <ul>
                                                    <li><a
                                                            href="{{ route($type . '.index') }}">{{ $searchResult->title }}</a>
                                                    </li>
                                                </ul>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
