<?php

use App\Http\Controllers\AppSettingsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/pages/home');
})->name('home');

Route::get('/about', function () {
    return view('/pages/about_us');
})->name('about_us');



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('app_settings')->group(function () {

    Route::controller(AppSettingsController::class)->group(function () {

        Route::get('/', 'index')->name('app-settings');

        Route::get('create', 'index')->name('app-settings-create');

        Route::post('/', 'store')->name('app-settings-store');

        Route::get('{app_settings}/edit', 'index')->name('app-settings-edit');

        Route::put('/{app_settings}', 'update')->name('app-settings-update');
    });
});

Route::prefix('product')->group(function () {

    Route::controller(ProductController::class)->group(function () {

        Route::get('/', 'index')->name('product');

        Route::get('create', 'index')->name('product-create');

        Route::post('/', 'store')->name('product-store');

        Route::get('{product}/edit', 'index')->name('product-edit');

        Route::put('/{product}', 'update')->name('product-update');
    });
});

Route::prefix('partner')->group(function () {

    Route::controller(PartnerController::class)->group(function () {

        Route::get('/', 'index')->name('partner');

        Route::get('create', 'index')->name('partner-create');

        Route::post('/', 'store')->name('partner-store');

        Route::get('{partner}/edit', 'index')->name('partner-edit');

        Route::put('/{partner}', 'update')->name('partner-update');
    });
});

Route::prefix('team')->group(function () {

    Route::controller(TeamController::class)->group(function () {

        Route::get('/', 'index')->name('team');

        Route::get('create', 'index')->name('team-create');

        Route::post('/', 'store')->name('team-store');

        Route::get('{team}/edit', 'index')->name('team-edit');

        Route::put('/{team}', 'update')->name('team-update');
    });
});

Route::prefix('client')->group(function () {

    Route::controller(ClientController::class)->group(function () {

        Route::get('/', 'index')->name('client');

        Route::get('create', 'index')->name('client-create');

        Route::post('/', 'store')->name('client-store');

        Route::get('{client}/edit', 'index')->name('client-edit');

        Route::put('/{client}', 'update')->name('client-update');
    });
});

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'my'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('lang.switch');
