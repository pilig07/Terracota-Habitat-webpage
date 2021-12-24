<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/nosotros', function () { return view('nosotros');});
Route::get('/contactanos', function () { return view('contactanos');});

Route::get('/usuarios', 'HomeController@verUsuarios');
Route::get('/catalogo', 'HomeController@catalogo');
Route::get('/eliminar/{id}', 'HomeController@eliminar');
Route::post('/guardausr','HomeController@guardausr');
Route::post('/updateUsr','HomeController@updateUsr');
Route::get('/perfil', function () { return view('perfil');});
Route::get('/agregarprop', function () { return view('agregarprop');});
Route::post('/guardaProp','HomeController@guardaProp');
Route::post('/guardaImg','HomeController@guardaImg')->middleware('auth');
Route::get('/verpropiedad', 'HomeController@verProp');
Route::get('/eliminarP/{id}', 'HomeController@eliminarP');
Route::post('/guardaP','HomeController@guardaP');
Route::get('/propiedad/{id}','HomeController@detalleProp');
Route::get('/PruebaPDF/{id}','HomeController@PruebaPDF');
