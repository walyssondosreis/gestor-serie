<?php

use App\Http\Controllers\SeriesController;
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
    // return view('welcome');
    // return redirect('/series');
    return to_route('series.index');
});

// Route::get('/teste',function(){
//     echo 'Teste Otário!';
// });

// Route::get('/series',[SeriesController::class,'index']);
// Route::get('/series/criar',[SeriesController::class,'create']);
// Route::post('/series/salvar',[SeriesController::class,'store']);

// Route::controller(SeriesController::class)->group(function(){
//     Route::get('/series','index')->name('series.index');
//     Route::get('/series/criar','create')->name('series.create');
//     Route::post('/series/salvar','store')->name('series.store');
// });

/* A função resource irá definir rotas padrões de index, create store etc. segundo padrão*/
// Ira definir o controler pra todas as rotas padrão.
// Route::resource('/series',SeriesController::class); 
// Ira definir o controler apenas pra as rotas especificadas padrão.
Route::resource('/series', SeriesController::class)
    ->except(['show']);
    // ->only(['index', 'create', 'store','destroy', 'edit','update']);

// Route::post('/series/destroy/{serie}',[SeriesController::class, 'destroy'])->name('series.destroy');
