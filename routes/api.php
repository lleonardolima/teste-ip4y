<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/users', function (Request $request) {
//     return response()->json([
//         'status'=>true,
//         'message' => "Listar Usuários",
//     ],200);
    
// });

Route::get('/users',[UserController::class, 'index']);//GET http://127.0.0.1:8000/api/users?page=1
Route::get('/users/{user}',[UserController::class, 'show']);//GET  http://127.0.0.1:8000/api/users/1