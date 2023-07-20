<?php

use App\Http\Controllers\OnlineController;

$im = imagegrabscreen();
imagepng($im, 'captura.png');
imagedestroy($im);

$llamarLista = new OnlineController();
$llamarLista->llamarAsistencia();

/* function subeimagen64temp($img, $nombre)
{
    $carpetaDestino = "screens/";
    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = $carpetaDestino . $nombre . '.png';
    $success = file_put_contents($file, $data);
    return $success;
}

$img = $_POST['img'];
$nombre = $_POST['nombre'];
$archivo = subeimagen64temp($img, $nombre); */
