<?php

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
// Route::get('/trangchu',[PageController::class,'getIndex']);
// Route::get('/type{id}',[PageController::class,'getIndex']);
// Route::get('/detail{id}',[PageController::class,'getIndex']);
// Route::get('contact',[PageController::class,'getIndex']);
// Route::get('about',[PageController::class,'getIndex']);

Route::get('/', function () {
    return view('test');
});
// Route::Get('/welcome',function()  {
//     return ' Chao Mung Tai Xoan da den voi PNV24A';

// });
Route::get('/welcome',[App\http\Controllers\UserController::class ,'index']);


Route::get('/sum',[App\http\Controllers\XinchaoController:: class,'tinhtong']);
Route::post('/sum',[App\http\Controllers\XinchaoController:: class,'tinhtong']);


// Route::get('/computeArea', [AreaofShapeController::class, 'computeArea']);
// Route::post('/computeArea', [AreaofShapeController::class, 'computeArea']);
