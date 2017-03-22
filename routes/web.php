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
use App\Item;

Route::get('bienvenido', function () {return view('welcome');}); // Vista para los Invitados
Route::get('a', function () {
    
    $item = new Item();
    $item = Item::where('id', '=', 1)->first();
    return view('a', ['item' => $item]);}); // BORRAR


Auth::routes(); // Rutas de Login y Registro

Route::group(['middleware' => ['isAuth']], function() { // isAuth exige que haya un usuario conectado

    Route::get('newPlayer', 'UserController@newPlayer');
    Route::post('newPlayer', 'UserController@saveNewPlayer');
    Route::post('venderItem', 'InventarioController@vender');
    Route::post('equiparItem', 'InventarioController@equipar');

    Route::group(['middleware' => ['isAdmin']], function() { // isAdmin exige que el usuario sea administrador
            Route::get('crearNota', 'AdminController@crearNota');
            Route::post('crearNota', 'AdminController@GuardarNota');
        });


    

    Route::group(['middleware' => ['controlPersonaje']], function() { // revisa que los stats maximos sean correctos

        Route::get('/', 'UserController@index');

        Route::get('inventario', 'InventarioController@index');
        Route::get('personaje', 'UserController@personaje');
        Route::get('trabajo', 'TrabajoController@index');
        Route::get('entrenamiento', 'EntrenamientoController@index');

        Route::get('armeria', 'ArmeriaController@index');

        Route::get('alquimista', 'AlquimistaController@index');
        Route::get('sastreria', 'SastreriaController@index');
        Route::get('herreria', 'HerreriaController@index');

        Route::group(['middleware' => ['controlOro']], function() { // controlOro verifica si el usuario tiene la cantidad de oro necesaria para realizar la accion
            Route::post('entrenamiento', 'EntrenamientoController@entrenar');
        });

        Route::group(['middleware' => ['controlCompra']], function() { // controlComprao verifica si el usuario tiene la cantidad de oro necesaria para realizar la compra y el espacio suficiente
            Route::post('armeria', 'ComprasController@index');
        });

        
        
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
});