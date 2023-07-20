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

<div >
    <h2>Lista de Usuarios</h2>
</div>
<table class="tg table-marks">
    <tbody>
        <tr>
            <td class="tg-0pky head-table" colspan="6">Usuarios</td>
            <td class="tg-0pky head-table" colspan="3">Correo</td>
            <td class="tg-0pky head-table" colspan="3">Rol</td>
        </tr>

        @if ($usuarios->count() > 0)

            @foreach ($usuarios as $user)
                <tr class="subject-box padding-box">
                    <td class="tg-0pky subject-parent subject-box" colspan="6">
                        <div class="teacher">
                            {{ $user->name }} {{ $user->apellido }}
                        </div>
                    </td>
                    <td class="tg-0pky subject-box" colspan="3">
                        <div class="mark">
                            {{ $user->email }}
                        </div>
                    </td>
                    <td class="tg-0pky subject-box" colspan="3">
                        @if ($user->tipo == 1)
                            <div class="mark">
                                Director
                            </div>
                        @endif
                        @if ($user->tipo == 2)
                            <div class="mark">
                                Profesor
                            </div>
                        @endif
                        @if ($user->tipo == 3)
                            <div class="mark">
                                Estudiante
                            </div>
                        @endif
                        @if ($user->tipo == 4)
                            <div class="mark">
                                Padre
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="performance-box">
                    <td class="tg-0pky performance-box" colspan="12">
                        <div class="text-performance">
                            {{-- {{ $user->name }} {{ $user->apellido }}</div> --}}
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
<h5>Derechos Reservados a <i>Comunidad Hombres Nuevos</i></h5>

