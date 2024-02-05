<?php


use App\Clases\Cicle;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
    return view('index');
    //return view('welcome');
});

Route::get('/cicles', function () {

    $cicle1 = new Cicle('1','DAW','Desenvolupament Aplicacions Web');
    $cicle2 = new Cicle('2','DAM','Desenvolupament Aplicacions Multiplataforma');
 
    $cicles = [$cicle1, $cicle2];

    // $data['cicles'] = $cicles;
    // $data['numero'] = $numero;
    
    return view('carpeta.index', compact('cicles'));
    //return view('welcome');
});

// Route::get('/saludo', function (){

//     // $data['nombre'] = "Fran";

//     // Se envia el array asociativo
//     // return view('saludo',$data);

//     $nombre = "Fran";
//     $apellidos = "Garcia Arroyo";

//     // Se envia la variable y la convierte en un array con indice nombre
//     return view('saludo',compact('nombre','apellidos'));
// });


// // ? significa que es opcional
// Route::get('/saludo/{nombre?}', function ($nombre = null){

//     return "Hola " . $nombre;
// })->name('saludo');

// Route::get('/prova',function(){

//     return "Això és una prova";
// });

// Route::get('/parametre/{param1}/{param2}', function ($param1,$param2){

//     return "El resultado de la suma es :" . $param1+$param2;
// })->name('suma');

// Route::get('blading',function(){

//     $data['nombre'] = 'Fran';
//     $data['apellido'] = 'Garcia';

//     return view('index',$data);
// });




