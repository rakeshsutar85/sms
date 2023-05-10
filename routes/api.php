<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::get('/hello', function () {
//     return "hello";
// });

//Route::get('/show', [ StudentsController::class,'index']);
//Route::get('/details', [ StudentsController::class,'show']);

//Route::post('/addstudents', [ StudentsController::class,'store']);



Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::apiResource('students', StudentsController::class);

   // more route definitions

});



