<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mhsController;
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
    return view('index',[
        "title"=>"Home"
    ]);
});

Route::get('/update', function () {
    return view('update', [
        "title"=>"Update"
    ]);
});

Route::get('/detail/{slug}', [mhsController::class, 'find']);

Route::get('/', [mhsController::class, 'show']);
