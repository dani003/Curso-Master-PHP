<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //echo "<h1>Hola mundo</h1>";
    return view('welcome');
});

Route::get('/peliculas/{pagina?}', 'PeliculaController@index');

Route::get('/detalle/{year?}', [
    'middleware' => 'testyear',
    'uses' => 'PeliculaController@detalle',
    'as' => 'detalle.pelicula'
]);

Route::get('/redirigir', 'PeliculaController@redirigir');

Route::get('/formulario', 'PeliculaController@formulario');
Route::post('/recibir', 'PeliculaController@recibir');
Route::resource('usuario', 'UsuarioController');
//Rutas de fruta
//Route::get('/frutas/index', 'FrutaController@index');

Route::group(['prefix'=>'frutas'], function(){
    Route::get('index', 'FrutaController@index');
    Route::get('detail/{id}', 'FrutaController@detail');
    Route::get('crear', 'FrutaController@create');
    Route::post('save', 'FrutaController@save'); //es por post por que vamos a guardar recursos
    Route::get('delete/{id}', 'FrutaController@delete');
    Route::get('editar/{id}', 'FrutaController@edit');
    Route::post('update', 'FrutaController@update');
});


/*
GET : Conseguir datos
POST: Guardar datos
PUT: Actualizar recursos
DELETE: Eliminar Recursos
*/
/*
Route::get('/mostrar-fecha', function () {
    $titulo = "Estoy mostrando la fecha";
    return view('mostrar-fecha', array(
        'titulo' => $titulo
    ));
});

Route::get('/pelicula/{titulo}/{year?}', function ($titulo = 'no hay pelicula seleccionada', $year = 2020) {
    //echo "<h1>Hola mundo</h1>";
    return view('pelicula', array(
        'titulo' => $titulo,
        'year' => $year
    ));
})->where(array(   //Esta ruta solo se puede usar cuando se cumplan las siguientes condiciones:
    'titulo' => '[a-z]+', //titulo escrito en minusculas
    'year' => '[0-9]+'
));

Route::get('/listado-peliculas', function () {
    $titulo = "Listado de peliculas";
    $listado = array('batman', 'Spiderman', 'ironman');
    return view('peliculas.listado')
            ->with('titulo', $titulo) //otra forma de pasar la variable titulo ademas de usar array(''=>$)
            ->with('listado', $listado);
});

Route::get('/pagina-generica', function () {

    return view('pagina');
});
*/
