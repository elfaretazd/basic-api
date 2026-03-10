<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/status', function () {
    return response()->json([
        "app" => "Todo API",
        "status" => "running"
    ]);
});

Route::get('/greet/{name}', function ($name) {
    return response()->json([
        "message" => "Hello, {$name}!"
    ]);
});

Route::post('/students', [StudentController::class, 'store']);
Route::get('/students', [StudentController::class, 'index']);
Route::put('/students/{nim}', [StudentController::class, 'update']);
Route::patch('/students/{nim}', [StudentController::class, 'update']);
Route::delete('/students/{nim}', [StudentController::class, 'destroy']);