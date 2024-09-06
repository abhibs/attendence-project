<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::get('/test', function () {
    echo "Abhiram";
});

Route::get('', [AdminController::class, 'login'])->name('admin-login');


Route::group(['prefix' => 'admin'], function () {
    Route::controller(AdminController::class)->group(function () {
        Route::post('/login', 'loginPost')->name('admin-login-post');
            Route::group(['middleware' => 'auth:admin'], function () {
                Route::get('/dashboard', 'dashboard')->name('admin-dashboard');
            });

    });
});
