@extends('layouts.layout')

@section('icon_title')
    <i class="fas fa-school"></i>
@endsection

@section('title', 'U.E Nestor Paz Zamora')

@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row">

                    @foreach ($users as $user)
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                            <div class="card bg-light d-flex flex-fill">
                                <div class="card-header text-muted border-bottom-0">
                                    {{-- @if ($user->tipo == 1)
                                        Director
                                    @endif
                                    @if ($user->tipo == 2)
                                        Profesor
                                    @endif
                                    @if ($user->tipo == 3)
                                        Estudiante
                                    @endif
                                    @if ($user->tipo == 4)
                                        Padre
                                    @endif --}}
                                    Estudiante
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>{{ $user->name }} {{ $user->apellido }}</b>
                                            </h2>
                                            <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist
                                                /
                                                Coffee Lover </p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i
                                                            class="fas fa-lg fa-at"></i></span> Email: {{ $user->email }}
                                                </li>
                                                <li class="small"><span class="fa-li"><i
                                                            class="fas fa-lg fa-phone"></i></span>
                                                    Phone #: {{ $user->telefono }}</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="{{ asset('dist/img/' . $user->photo) }}" alt="user-avatar"
                                                class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                            <i class="fas fa-comments"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> View Profile
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection
