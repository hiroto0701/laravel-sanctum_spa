<?php declare(strict_types=1);

use App\Http\Controllers\Api\MeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

Route::post('/login', LoginController::class)->name('login');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', MeController::class);
    Route::post('/logout', LogoutController::class)->name('logout');
});
