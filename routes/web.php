<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student_IdentityController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\Student_ReportController;
use App\Models\Jurusan;
use App\Models\Student_Identity;
use App\Models\Student_Report;

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
    return view('index.index');
});

Route::resource('/murid', Student_IdentityController::class);
Route::resource('/jurusan', JurusanController::class);
Route::resource('/raport', Student_ReportController::class);
Route::get('/api/murid', 'App\Http\Controllers\Student_IdentityController@getMuridByClass');
Route::get('/api/mapel', 'App\Http\Controllers\Mata_PelajaranAPI@index');
