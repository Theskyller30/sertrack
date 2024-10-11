<?php

use App\Http\Controllers\PlaneacionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


$idplaneacion ='planeacion/{id}';
    Route::get('planeacion', [PlaneacionController::class, 'index']);
    Route::get($idplaneacion, [PlaneacionController::class, 'show']);
    Route::post('planeacion', [PlaneacionController::class, 'store']);
    Route::put($idplaneacion, [PlaneacionController::class, 'update']);
    Route::delete($idplaneacion, [PlaneacionController::class, 'delete']);