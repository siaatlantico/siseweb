<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/pruebas', function(){
    $departament = App\Departament::findOrFail(1);

    return $departament->cities;
    /* ()->create([
        'nombre' => 'atlantico'

    ]);*/
    

    /*$departament = App\Departament::findOrFail(2);
    return $departament->Pais;*/
});


Route::resource('/periodos', 'PeriodoController');
Route::resource('/estudiantes', 'StudentController');
Route::resource('/paises', 'CountryController');
Route::resource('/departamentos', 'DepartamentController');
Route::resource('/municipios', 'MunicipalityController');
Route::resource('/tiposdocumentos', 'TypeDocumentController');