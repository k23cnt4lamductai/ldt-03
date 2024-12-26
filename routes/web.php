<?php

use App\Http\Contriller\LdtAccountController;
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

Route::get('/account',[LdtAccountController::class,'ldtindex'])->name('ldtAccount.ldtIndex');
Route::get("/ldt-account-create",[LdtAccountController::class,'ldtCreate'])->name('ldtAccount.ldtCreate');
Route::get("/ldt-account-show-data",[LdtAccountController::class,'ldtShowData'])->name('ldtAccount.ldtShowData');
