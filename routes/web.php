<?php

use App\Http\Controllers\ClasificacionAccionController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\FuncionEmpleadoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TipoCursoController;
use App\Http\Controllers\TipoEnfoqueCursoController;
use Illuminate\Support\Facades\Route;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/////// rutas 
Route::resource('ClasifAccion', ClasificacionAccionController::class);
Route::resource('TipoEnfoqueCurso', TipoEnfoqueCursoController::class);
Route::resource('Cursos', CursoController::class);
Route::resource('TipoCurso',TipoCursoController::class);
Route::resource('FuncionEmpleado', FuncionEmpleadoController::class);




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//rutas microsoft
Route::get('/callback',[LoginController::class, 'callback']);
Route::get('/logeo', [LoginController::class, 'logeo'])->name("logeo");


Route::group(['middleware'=>['auth','verified','checa']],function(){
    //Route::resource('logeo11', App\Http\Controllers\LoginController::class);
});


//rutas cursos

//Route::get('Cursos', [CursoControllerController::class, 'index'])->name('Cursos.index');


