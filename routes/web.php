<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Inertia\Inertia;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::group(['prefix' => 'admin'], function () {

    Route::get('/dashboard', function () {
        return Inertia::render('Admin/Dashboard');
    })->name('dashboard.index');



    Route::group(['prefix' => 'users'], function () {

        Route::get('/', function () {
            return Inertia::render('Admin/Users/Index');
        });

        Route::get('/roles', function () {
            return Inertia::render('Admin/Roles/Index');
        });

        Route::get('/permissions', function () {
            return Inertia::render('Admin/Permissions/Index');
        });
    });

    Route::group(['prefix' => 'catalog'], function () {
        Route::get('/categories', function () {
            return Inertia::render('Admin/Catalog/Categories/Index');
        });
        Route::get('/attributes', function () {
            return Inertia::render('Admin/Catalog/Attributes/Index');
        });
        Route::get('/products', function () {
            return Inertia::render('Admin/Catalog/Products/Index');
        });
    });
});
