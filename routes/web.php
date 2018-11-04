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
    return view('dashboard');
});

Route::group(['prefix' => 'temas'],function(){ 

	Route::get('/', function () {
    return view('temas');
    });


    Route::get('/embarazo_precoz', function () {
    return view('embarazo_precoz');
    });



    Route::get('/abuso', function () {
    return view('abuso');
    });


    Route::get('/enfermedades', function () {
    return view('enfermedades');
    });


    Route::get('/nuestro_cuerpo', function () {
    return view('nuestro_cuerpo');
    });


    Route::get('/noviazgo', function () {
    return view('noviazgo');
    });

   


});




Route::get('/imagenes', function () {
    return view('imagenes');
});
Route::get('/glosario', function () {
    return view('glosario');
});

Route::get('/imagenes/embarazo_precoz', function () {
    return view('imagenes.imagenes_embarazo_precoz');
});

Route::get('/imagenes/abuso', function () {
    return view('imagenes.imagenes_abuso');
});

Route::get('/imagenes/enfermedades', function () {
    return view('imagenes.imagenes_enfermedades');
});

Route::get('/imagenes/nuestro_cuerpo', function () {
    return view('imagenes.imagenes_nuestro_cuerpo');
});
Route::get('/imagenes/noviazgo', function () {
    return view('imagenes.imagenes_noviazgo');
});


//embarazo precoz, abuso, ets y its, nuestro cuerpo,  noviazgo

 Route::get('/administracion', function () {
    return view('administracion');
    });

 Route::get('/administracion/crear_noticia', function () {
    return view('crear_noticia');
    });

 Route::post('/administracion/crear_noticia/crear','NoticiasController@store');

Route::get('/administracion/gestionar_noticias','NoticiasController@index_gestionar');

Route::put('/administracion/gestionar_noticias/editar/{id_noticia}','NoticiasController@update')->name('editar');
Route::put('/administracion/gestionar_noticias/eliminar/{id_noticia}','NoticiasController@destroy')->name('eliminar');

 
 Route::get('/administracion/eliminar_noticia', function () {
    return view('eliminar_noticia');
    });

Route::get('/videos_sexus', function () {
    return view('videos');
});

Route::get('/videos/embarazo_precoz', function () {
    return view('videos.videos_embarazo_precoz');
});

Route::get('/videos/abuso', function () {
    return view('videos.videos_abuso');
});

Route::get('/videos/enfermedades', function () {
    return view('videos.videos_enfermedades');
});

Route::get('/videos/nuestro_cuerpo', function () {
    return view('videos.videos_nuestro_cuerpo');
});
Route::get('/videos/noviazgo', function () {
    return view('videos.videos_noviazgo');
});








Route::get('/charlas', function () {
    return view('charlas');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/libros', function () {
    return view('libros');
});

Route::get('/noticias','NoticiasController@index');


Route::get('/ayuda', function () {
    return view('ayuda');
});

Route::get('/ddnna', function () {
    return view('ddnna');
});

Route::get('/testimonios', function () {
    return view('testimonios');
});
Route::get('/glosario', function () {
    return view('glosario');
});