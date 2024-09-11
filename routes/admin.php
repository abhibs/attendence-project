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
                Route::get('/admin/logout', 'adminLogout')->name('admin-logout');
                Route::get('/profile', 'adminProfile')->name('admin-profile');
                Route::post('/profile/update', 'adminProfileUpdate')->name('admin-profile-update');
                Route::get('/change/password', 'changePassword')->name('admin-change-password');
                Route::post('/update/pasword', 'updatePassword')->name('admin-password-update');
            });

    });
});
