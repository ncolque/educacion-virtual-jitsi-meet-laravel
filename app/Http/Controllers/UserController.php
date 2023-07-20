<?php

namespace App\Http\Controllers;

use App\Mail\Saludo;
use App\Models\Pagina;
use App\Models\User;
use Aws\Rekognition\RekognitionClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('usuarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('usuarios.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newUsuario = $request->all();
        $newUsuario['password'] = Hash::make($request->password);
        if ($request->file('photo')) {
            $name = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->storeAs('public/fotos', $name);
            $newUsuario['photo'] = $name;
        }
        $usuario = User::create($newUsuario);
        $usuario->roles()->sync($request->roles);

        Mail::to($usuario->email)->send(new Saludo($usuario));
        return redirect()->route('users.index')->with(
            'info',
            [
                'afirmacion' => 'success',
                'mensaje' => 'Registro creado satisfactoriamente',
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('usuarios.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $aux = $request->all();
        if ($request->file('photo')) {
            Storage::delete('public/fotos/' . $user->photo);
            $name = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->storeAs('public/fotos', $name);
            $aux['photo'] = $name;
        } else {
            $aux['photo'] = $user->photo;
        }

        $user->update($aux);
        $user->roles()->sync($request->roles);
        return redirect()->route('users.index')->with(
            'info',
            [
                'afirmacion' => 'primary',
                'mensaje' => 'Registro actualizado satisfactoriamente',
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $result = [
            'afirmacion' => 'danger',
            'mensaje' => 'Registro eliminado satisfactoriamente',
        ];
        try {
            Storage::delete('public/fotos/' . $user->photo);
            $user->delete();
        } catch (\Throwable $th) {
            $result['afirmacion'] = 'danger';
            $result['mensaje'] = 'No es posible eliminar este registro';
        }
        return redirect()->route('users.index')->with('info', $result);
    }

    public function estudiantes()
    {
        $users = User::where('tipo', 3)->get();
        return view('usuarios.estudiantes', compact('users'));
    }
}
