<?php

use Illuminate\Support\Facades\Route;

// ======================
//  ADMIN LOGIN ROUTELARI
// ======================
use App\Http\Controllers\Admin\AuthController;

Route::get('/admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'loginPost'])->name('admin.login.post');
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');


// FRONTEND SAYFALARI
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/hakkimizda', [PageController::class, 'about']);
Route::get('/iletisim', [PageController::class, 'contact']);


// -----------------------------
// ADMIN PANEL ROUTELARI
// -----------------------------

// Admin About Controller'lar
use App\Http\Controllers\Admin\AboutBannerController;
use App\Http\Controllers\Admin\AboutBoxController;
use App\Http\Controllers\Admin\AboutStatController;
use App\Http\Controllers\Admin\AboutTeamController;
use App\Http\Controllers\Admin\AboutServiceController;

// Admin Home Controller'lar
use App\Http\Controllers\Admin\HomeBannerController;
use App\Http\Controllers\Admin\HomeBoxController;
use App\Http\Controllers\Admin\HomeAboutController;



Route::middleware('admin')->group(function ()
{

    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // -----------------------------
    // ABOUT: Banner Bölümü CRUD
    // -----------------------------
    Route::resource('/admin/about/banner', AboutBannerController::class)->names([
        'index'   => 'banner.index',
        'create'  => 'banner.create',
        'store'   => 'banner.store',
        'edit'    => 'banner.edit',
        'update'  => 'banner.update',
        'destroy' => 'banner.destroy'
    ]);


    // -----------------------------
    // ABOUT: 3'lü Kutular CRUD
    // -----------------------------
    Route::resource('/admin/about/boxes', AboutBoxController::class)->names([
        'index'   => 'boxes.index',
        'create'  => 'boxes.create',
        'store'   => 'boxes.store',
        'edit'    => 'boxes.edit',
        'update'  => 'boxes.update',
        'destroy' => 'boxes.destroy'
    ]);


    // -----------------------------
    // ABOUT: İstatistikler CRUD
    // -----------------------------
    Route::resource('/admin/about/stats', AboutStatController::class)->names([
        'index'   => 'stats.index',
        'create'  => 'stats.create',
        'store'   => 'stats.store',
        'edit'    => 'stats.edit',
        'update'  => 'stats.update',
        'destroy' => 'stats.destroy'
    ]);


    // -----------------------------
    // ABOUT: Ekip CRUD
    // -----------------------------
    Route::resource('/admin/about/team', AboutTeamController::class)->names([
        'index'   => 'team.index',
        'create'  => 'team.create',
        'store'   => 'team.store',
        'edit'    => 'team.edit',
        'update'  => 'team.update',
        'destroy' => 'team.destroy'
    ]);


    // -----------------------------
    // ABOUT: Hizmetler (Neler Yapıyoruz) CRUD
    // -----------------------------
    Route::resource('/admin/about/services', AboutServiceController::class)->names([
        'index'   => 'services.index',
        'create'  => 'services.create',
        'store'   => 'services.store',
        'edit'    => 'services.edit',
        'update'  => 'services.update',
        'destroy' => 'services.destroy'
    ]);
     
    Route::resource('/admin/home/banner', HomeBannerController::class)->names([
    'index' => 'homebanner.index',
    'create' => 'homebanner.create',
    'store' => 'homebanner.store',
    'edit' => 'homebanner.edit',
    'update' => 'homebanner.update',
    'destroy' => 'homebanner.destroy'
    ]);

    Route::resource('/admin/home/boxes', HomeBoxController::class)->names([
        'index' => 'homeboxes.index',
        'create' => 'homeboxes.create',
        'store' => 'homeboxes.store',
        'edit' => 'homeboxes.edit',
        'update' => 'homeboxes.update',
        'destroy' => 'homeboxes.destroy'
    ]);

    Route::resource('/admin/home/about', HomeAboutController::class)->names([
        'index' => 'homeabout.index',
        'create' => 'homeabout.create',
        'store' => 'homeabout.store',
        'edit' => 'homeabout.edit',
        'update' => 'homeabout.update',
        'destroy' => 'homeabout.destroy'
    ]);


});
