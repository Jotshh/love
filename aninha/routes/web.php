<?php

use App\Http\Controllers\AnaController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/


/*Route::get('/ana/{name?}', function ($name = null) {
    return view('ana',['nomePage'=>$name]);
});*/

/* se tudo der errado, retire esse comentario
Route::get('/ana', [AnaController::class, 'index']);

Route::get('/inicio', function () {
    return view('welcome');
})->name('home-index');
*/

Route::prefix('fotos')->group(function(){
    Route::get('/',[AnaController::class, 'index'])->name('fotos-index');
    Route::get('/create',[AnaController::class, 'create'])->name('fotos-create');
    Route::post('/',[AnaController::class, 'store'])->name('fotos-store');
    Route::get('/{id}/edit',[AnaController::class, 'edit'])->where('id','[0-9]+')->name('fotos-edit');
    Route::put('/{id}',[AnaController::class, 'update'])->where('id','[0-9]+')->name('fotos-update');
    Route::delete('/{id}',[AnaController::class, 'destroy'])->where('id','[0-9]+')->name('fotos-destroy');
});

Route::fallback(function(){
    return "ERROR";
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
