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

//GENERALES 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//USUARIO
Route::get('/configuracion', 'UserController@config')->name('config');
Route::post('/user/update', 'UserController@update')->name('user.update');
Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');
Route::get('/perfil/{id}', 'UserController@profile')->name('profile');
Route::get('/gente/{search?}/', 'UserController@index')->name('user.index');

//IMAGEN
Route::get('/subir-imagen', 'ImageController@create')->name('image.create');
Route::post('/image/save', 'ImageController@save')->name('image.save');
Route::get('/image/file/{filename}', 'ImageController@getImage')->name('image.file');
Route::get('/imagen/{id}', 'ImageController@detail')->name('image.detail');
Route::get('/image/delete/{id}', 'ImageController@delete')->name('image.delete');
Route::get('/imagen/editar/{id}', 'ImageController@edit')->name('image.edit');
Route::post('/imagen/update', 'ImageController@update')->name('image.update');

//COMENTARIO

Route::post('/comment/save', 'CommentController@save')->name('comment.save');
Route::get('/comment/delete/{id}', 'CommentController@delete')->name('comment.delete');

//LIKE
Route::get('/like/{image_id}', 'LikeController@like')->name('like.save');
Route::get('/dislike/{image_id}', 'LikeController@dislike')->name('like.delete');
Route::get('/likes', 'LikeController@index')->name('likes');
