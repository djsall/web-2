<?php

use App\Http\Controllers\API\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('artists', [Artist::class, 'index']);
Route::get('artists/{id}', [Artist::class, 'show']);
Route::post('artists/create', [Artist::class, 'store']);
Route::put('artists/{id}/update', [Artist::class, 'update']);
Route::delete('artists/{id}/delete', [Artist::class, 'destroy']);
