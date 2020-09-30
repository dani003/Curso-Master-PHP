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

//use App\Image;

Route::get('/', function () {
    /*
    $images = Image::all(); // saco todas las images de la base de datos
    foreach($images as $image){
        echo 'Image path: '.$image->image_path."<br/>";
        echo 'description: '.$image->description."<br/>";
        echo 'usuario: '.$image->user->name.' '.$image->user->surname."<br/>";

        if(count($image->comments) >= 1 ){
            echo "<strong>Comentarios: </strong>"."<br/>";
            foreach($image->comments as  $comment){
                echo $comment->user->nick.' : '.$comment->content."<br/>";
            }
        }

        echo 'LIKES: '.count($image->likes);
        //var_dump($image->user);
        echo "<hr/>";
        //var_dump($image); //Esto muestra todo vitaminadao (muchos arrays de todo)
    }
    die();
    */
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
