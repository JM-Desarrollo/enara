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

Route::get('bienvenido', function () {return view('welcome');}); // Vista para los Invitados

Auth::routes(); // Rutas de Login y Registro

Route::group(['middleware' => ['isAuth']], function() { // isAuth exige que haya un usuario conectado

    Route::get('/', 'UserController@index');
    Route::get('trabajo', 'TrabajoController@index');
    Route::get('tutorialFirst', 'TutorialController@first');

     
    Route::group(['middleware' => ['isTutorial']], function() { // isTutorial exige que el usuario no haya completado los tutoriales
        Route::get('tutorial', 'TutorialController@index');
        Route::get('trabajoTutorial', 'TutorialController@trabajo');
        Route::get('alquimistaTutorial', 'TutorialController@alquimista');
        Route::get('entrenamientoTutorial', 'TutorialController@entrenamiento');
        Route::get('armeriaTutorial', 'TutorialController@armeria');
        Route::get('herreriaTutorial', 'TutorialController@herreria');
        Route::get('sastreTutorial', 'TutorialController@sastreria');
     });

     
     Route::group(['middleware' => ['sinTrabajo']], function() { // sinTrabajo pide que el usuario no tenga un trabajo designado
        Route::post('trabajo', 'TrabajoController@asignar');
     });

     Route::group(['middleware' => ['conTrabajo']], function() { // conTrabajo pide que el usuario tenga un trabajo designado
        Route::get('recompensaJob', 'TrabajoController@recompensa');
     });




});