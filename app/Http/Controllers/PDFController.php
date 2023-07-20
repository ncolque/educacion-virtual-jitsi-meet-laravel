<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Asistencia;
use App\Models\Curso;
use App\Models\Gestion;
use App\Models\HorarioMateria;
use App\Models\Inscripcion;
use App\Models\Pagina;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PDFController extends Controller
{
    public function boletinPDF()
    {
        $student = User::where('id', Auth::user()->id)->first();
        $inscrip = Inscripcion::where('user_id', Auth::user()->id)->first();
        $misClas = HorarioMateria::where('user_id', Auth::user()->id)->get();
        $activid = Actividad::where('user_id', Auth::user()->id)->get();
        $pdf = \PDF::loadView('reportes.boletin', [
            'student' => $student,
            'inscrip' => $inscrip,
            'misClas' => $misClas,
            'activid' => $activid
        ]);
        return $pdf->download('boletin.pdf');
    }

    public function usuariosPDF()
    {
        $usuarios = User::all();
        $pdf = \PDF::loadView('reportes.usuarios', [
            'usuarios' => $usuarios,
        ]);
        return $pdf->download('usuarios.pdf');
    }

    public function estadisticas()
    {
        $cursos = Curso::all();
        $inscrip = Inscripcion::count();
        $asisten = Asistencia::count();

        $paginaMenor = Pagina::orderBy("visitas", 'asc')->first();
        $paginaMayor = Pagina::orderBy("visitas", 'desc')->first();
        $paginaTotal = Pagina::sum('visitas');
        return view('reportes.estadisticas', compact('inscrip', 'asisten', 'cursos', 'paginaMenor', 'paginaMayor', 'paginaTotal'));
    }
}
