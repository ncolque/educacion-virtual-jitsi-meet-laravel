<style type="text/css">
    body {
        font-family: "Nunito", sans-serif;
    }

    .tg {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%
    }

    .tg td {
        font-family: Arial, sans-serif;
        font-size: 14px;
        overflow: hidden;
        padding: 5px 5px;
        word-break: normal;
    }

    .tg th {
        border-color: rgb(146, 146, 146);
        border-style: solid;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-weight: normal;
        overflow: hidden;
        padding: 5px 5px;
        word-break: normal;
    }

    .tg .tg-0pky {
        border-color: inherit;
        text-align: left;
        vertical-align: top
    }

    table {
        font-family: "Nunito", sans-serif;
    }

    .app-logo {
        width: 70px;
        margin-top: -70px;
    }

    .text-head-middle {
        text-align: center !important;
        padding-left: 30px;
    }

    .app-name {
        font-size: 25px
    }

    .text-head-legend {
        font-size: 9px;
        line-height: 5px;
    }

    .informe-head-legend {
        font-size: 20px;
        font-weight: bold;
        margin-top: 15px;
    }

    .table-student {
        margin-top: 5px;
        width: 100%;
        border-color: #6b6b6b;
        border-width: 1px;
        border-style: solid;
        padding: 10px 5px;
        border-radius: 7px;
    }

    .info-student {
        font-size: 14px
    }

    .table-marks {
        margin-top: 20px
    }

    .head-table {
        font-weight: bold;
        font-size: 15px;
        background-color: beige;
    }

    .subject {
        font-size: 15px;
        font-weight: bold;
    }

    .teacher {
        font-size: 13px;
    }

    .assistance {
        font-size: 10px;
    }

    .text-performance {
        font-size: 11px
    }

    .subject-box {
        border-top: 1px solid rgb(133, 133, 133);
    }

    .performance-box {
        border-bottom: 1px solid rgb(133, 133, 133);
        margin-bottom: 10px;
    }

    .padding-box {
        margin-top: 10px;
        padding-top: 10px;
    }

    .table-marks {
        border-width: 1px;
        border-style: solid;
        border-color: rgb(133, 133, 133);
        border-radius: 7px !important;
    }

    .rank-table {
        margin-top: 5px;
    }

    .rank-table td {
        background-color: #9b9b9b;
        border-style: solid;
        border-width: 1px;
        border: 1px;
        text-align: center;
        padding: 7px 7px;
    }

</style>

<table>
    <tbody>
        <tr style="text-align: center">
            {{-- <td class="tg-0pky" colspan="2" rowspan="2">
                <img class="app-logo" src="{{ asset('/dist/img/fundacion.png') }}" alt="">
            </td> --}}
            <td class="text-head-middle" colspan="9" rowspan="2">

                <div class="app-name">Colegio Nestor Paz Zamora</div>
                <div class="text-head-legend">
                    <br> La Fundación Hombres Nuevos es una Organización No Gubernamental de Desarrollo (ONGD).
                    <br> <br>
                    Con licencia de funcionamiento segun Resolución Nº 396 del 01 de abril 1993, de la Secretaria de
                    Hombres Nuevos. <br> <br>
                    Educación Preescolar, Básica Primaria, Básica Secundaria y Media. <br> <br>
                    REGISTRO 789456123 - NIT 741258963-7
                </div>
                <div class="informe-head-legend">
                    Informe de rendimiento escolar
                </div>
            </td>
            {{-- <td class="tg-0pky" colspan="2" rowspan="2">
                <img class="app-logo" src="{{ asset('/dist/img/colegio.png') }}" alt="">
            </td> --}}
        </tr>
    </tbody>
</table>
<table class="table-student">
    <tbody>
        <tr>
            <td class="tg-0pky info-student" colspan="4">
                Estudiante: <b>{{ $student->name }} {{ $student->apellido }}</b>
            </td>
            <td class="tg-0pky info-student" colspan="4">
                Código: <b>000000{{ $student->id }}</b>
            </td>
            <td class="tg-0pky info-student" colspan="4">
                Periodo: <b>1er Trimestre{{-- {{ $inscrip->gestion->periodos->nombre }} --}}</b>
            </td>
        </tr>
        <tr>
            <td class="tg-0pky info-student" colspan="4">
                Telefono: <b>{{ $student->telefono }}</b>
            </td>
            <td class="tg-0pky info-student" colspan="4">
                @if (isset($inscrip->curso->nombre))
                    Grado: <b>{{ $inscrip->curso->nombre }} {{ $inscrip->curso->asignacion }}</b>
                @else
                    Grado: <b>No definido</b>
                @endif
            </td>
            <td class="tg-0pky info-student" colspan="4">
                Año: <b>{{ \Carbon\Carbon::now()->format('Y') }}</b>
            </td>
        </tr>
    </tbody>
</table>

<table class="tg table-marks">
    <tbody>
        <tr>
            <td class="tg-0pky head-table" colspan="6">Área y/o Asignatura</td>
            <td class="tg-0pky head-table" colspan="3">Horario</td>
            <td class="tg-0pky head-table" colspan="3">Acumulado</td>
        </tr>

        @if ($misClas->count() > 0)
            <tr>
                <td class="tg-0pky area-head-text" colspan="6">Asignaturas</td>
                <td class="tg-0pky area-head-text" colspan="3">-</td>
                <td class="tg-0pky area-head-text" colspan="3"></td>
            </tr>

            @foreach ($misClas as $class)
                <tr class="subject-box padding-box">
                    <td class="tg-0pky subject-parent subject-box" colspan="6">
                        <div class="subject">
                            {{ $class->materia->nombre }}</div>
                        <div class="teacher">
                            {{ $class->materia->user->name }} {{ $class->materia->user->apellido }}
                        </div>
                    </td>
                    <td class="tg-0pky subject-box" colspan="3">
                        <div class="assistance">
                            Hora Inicio: {{ $class->horario->hora_inicio }} <br>
                            Hora Fin: {{ $class->horario->hora_fin }}
                        </div>
                    </td>
                    <td class="tg-0pky subject-box" colspan="3">
                        <div class="mark">
                            Calificación: <b>{{ $class->id }}</b>
                        </div>
                        {{-- <div class="recovery">
                                Recuperación: <b style="color:red"> 50 </b>
                            </div> --}}
                    </td>
                </tr>
                <tr class="performance-box">
                    <td class="tg-0pky performance-box" colspan="12">
                        <div class="text-performance">
                            {{ $class->materia->descripcion }}</div>
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

<div style="margin-top: 40px">
    Escala Nacional e Institucional
</div>

{{-- <table class="rank-table">
    <tbody>
        <tr>
            @foreach ($misClas as $class)
                <td colspan="6" rowspan="2" style="background-color: green">
                    {{ $class->materia_id }} a {{ $class->horario_id }}
                    <div style="font-size: 10px">Estás aquí</div>
                </td>
            @endforeach
        </tr>
    </tbody>
</table> --}}

<div>
    Promedio del estudiante <b>APROBADO</b> con respecto al grupo <b>GENERAL</b>
</div>
