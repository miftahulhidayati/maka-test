<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// User CRUD routes
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']); // GET /api/users - List users with search
    Route::post('/', [UserController::class, 'store']); // POST /api/users - Create user
    Route::get('{user}', [UserController::class, 'show']); // GET /api/users/{id} - Show user
    Route::put('{user}', [UserController::class, 'update']); // PUT /api/users/{id} - Update user
    Route::delete('{user}', [UserController::class, 'destroy']); // DELETE /api/users/{id} - Delete user
});
