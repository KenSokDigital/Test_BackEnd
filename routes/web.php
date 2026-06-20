<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

    /// Router for Show UI
    Route::get('/frmRgs', [AuthController::class, 'showFrmRgs'])->name('register.submit');

    Route::post('/frmRgs', [AuthController::class, 'CreateUsr'])->name('register.submit');
    Route::post('/frmLogin', [AuthController::class, 'showfrmLogin'])->name('login.submit');

    //Post Route
    
