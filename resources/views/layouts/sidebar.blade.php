<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('dist/img/fundacion.png') }}" alt="Logo Image" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">U.E NESTOR PZ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Bienvenido {{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-school"></i>
                        <p>Dashboards</p>
                    </a>
                </li>

                @can('gestions.index')
                    <li class="nav-item">
                        <a href="{{ route('gestions.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>Gestiones</p>
                        </a>
                    </li>
                @endcan
                @can('materias.index')
                    <li class="nav-item">
                        <a href="{{ route('materias.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>Materias</p>
                        </a>
                    </li>
                @endcan
                @can('horarios.index')
                    <li class="nav-item">
                        <a href="{{ route('horarios.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>Horarios</p>
                        </a>
                    </li>
                @endcan

                <li class="nav-item">
                    <a href="{{ route('horario-materias.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-calendar"></i>
                        <p>Inscripciones</p>
                    </a>
                </li>

                @can('cursos.index')
                    <li class="nav-item">
                        <a href="{{ route('cursos.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-spell-check"></i>
                            <p>Cursos | Grados</p>
                        </a>
                    </li>
                @endcan
                @can('periodos.index')
                    <li class="nav-item">
                        <a href="{{ route('periodos.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-clipboard-list"></i>
                            <p>Periodos</p>
                        </a>
                    </li>
                @endcan
                @can('inscripcions.index')
                    <li class="nav-item">
                        <a href="{{ route('inscripcions.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-chalkboard"></i>
                            <p>Pre-Inscripcion</p>
                        </a>
                    </li>
                @endcan
                @can('calificacions.index')
                    <li class="nav-item">
                        <a href="{{ route('calificacions.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-calculator"></i>
                            <p>Calificaciones</p>
                        </a>
                    </li>
                @endcan
                @can('actividads.index')
                    <li class="nav-item">
                        <a href="{{ route('actividads.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-calendar-check"></i>
                            <p>Actividades</p>
                        </a>
                    </li>
                @endcan
                @can('asistencias.index')
                    <li class="nav-item">
                        <a href="{{ route('asistencias.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-tasks"></i>
                            <p>Asistencias</p>
                        </a>
                    </li>
                @endcan

                <li class="nav-item">
                    <a href="{{ route('onlines.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-desktop"></i>
                        <p>Clase en vivo</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('users.estudiantes') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>Estudiantes</p>
                    </a>
                </li>

                @can('users.index')
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Usuarios</p>
                        </a>
                    </li>
                @endcan

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>
                            Reportes
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('boletinPDF') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reporte Boletin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('usuariosPDF') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reporte Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('estadisticas') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reporte Estadisticos</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
