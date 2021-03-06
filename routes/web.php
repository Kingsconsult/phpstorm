<?php

use App\Http\Controllers\ArtisanCommandController;
use App\Http\Controllers\VariableController;
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
    return view('dashboard');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [VariableController::class, 'dashboard'])->name('dashboard');

    Route::get('editvariables/{id}', [VariableController::class, 'editVariables'])->name('editVariables');
    Route::put('updatevariables/{id}', [VariableController::class, 'updateVariables'])->name('updateVariables');
    Route::get('createvariables', [VariableController::class, 'createVariables'])->name('createVariables');
    Route::post('storevariables', [VariableController::class, 'storeVariables'])->name('storeVariables');
    Route::get('variables', [VariableController::class, 'index'])->name('variableIndex');

    Route::get('/buy', function () {
        return view('buy');
    })->name('buy');
});


require __DIR__ . '/auth.php';
