<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [DefaultController::class, 'home']);
Route::get('/welcome', [DefaultController::class, 'welcome']);
Route::get('/ejemplo', [DefaultController::class, 'ejemplo']);
