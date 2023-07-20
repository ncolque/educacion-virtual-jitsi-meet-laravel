<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Materia;
use App\Models\Online;
use App\Models\User;
use Aws\Rekognition\RekognitionClient;
use Illuminate\Http\Request;

class OnlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $onlines = Online::all();
        return view('onlines.index', compact('onlines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('onlines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Online::create($request->all());
        /* return redirect()->route('onlines.index'); */
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Online  $online
     * @return \Illuminate\Http\Response
     */
    public function show(Online $online)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Online  $online
     * @return \Illuminate\Http\Response
     */
    public function edit(Online $online)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Online  $online
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Online $online)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Online  $online
     * @return \Illuminate\Http\Response
     */
    public function destroy(Online $online)
    {
        $online->delete();
        return redirect()->route('onlines.index');
    }

    public function classonline(Online $online)
    {
        return view('online', compact('online'));
    }

    public function llamarAsistencia()
    {
        /* $im = imagegrabscreen();
        imagepng($im, 'captura.png');
        imagedestroy($im); */

        /* $args = [
            'credentials' => [
                'key'    => env('AWS_ACCESS_KEY_ID'),
                'secret' => env('AWS_SECRET_ACCESS_KEY'),
            ],
            'version'     => 'latest',
            'region'      => 'us-west-2',
        ];

        $client = new RekognitionClient($args);
        $usuarios = User::all();

        foreach ($usuarios as $usuario) {
            $result = $client->compareFaces([
                'SimilarityThreshold' => 80,
                'SourceImage' => [
                    'Bytes' => file_get_contents(public_path('captura.png')),
                ],
                'TargetImage' => [
                    'Bytes' => file_get_contents(public_path('storage/fotos/' . $usuario->photo)),
                ],
            ]);

            $FaceMatchesResult = $result['FaceMatches'];

            if (isset($FaceMatchesResult[0]['Similarity'])) {
                Asistencia::create([
                    'user_id' => $usuario->id,
                    'nombre' => $usuario->name . ' ' . $usuario->apellido,
                    'fecha' => date('Y-m-d'),
                    'estado' => 'Si asistio',
                ]);
            } else {
                Asistencia::create([
                    'user_id' => $usuario->id,
                    'nombre' => $usuario->name . ' ' . $usuario->apellido,
                    'fecha' => date('Y-m-d'),
                    'estado' => 'No asistio',
                ]);
            }
        } */
    } //fin llamarAsistencia

}
