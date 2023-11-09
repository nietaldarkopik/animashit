<?php

use App\Http\Controllers\backend\AdmArtistMediasController;
use App\Http\Controllers\backend\AdmPortfoliosController;
use App\Http\Controllers\backend\AdmProfileController;
use App\Http\Controllers\backend\AdmDashboardController;
use App\Http\Controllers\backend\AdmRoleController;
use App\Http\Controllers\backend\AdmUserController;
use App\Http\Controllers\backend\AdmGigsController;
use App\Http\Controllers\backend\AdmArtistsController;
use App\Http\Controllers\backend\AdmOrdersController;
use App\Http\Controllers\backend\AdmCustomersController;
use App\Http\Controllers\backend\AdmSchedulesController;
use App\Http\Controllers\backend\AdmPagesController;
use App\Http\Controllers\backend\AdmUsersController;
use App\Http\Controllers\backend\AdmSiteconfigsController;
use App\Http\Controllers\backend\AdmGigPackagesController;
use App\Http\Controllers\backend\AdmGigMediasController;
use App\Http\Controllers\backend\AdmPageMediasController;
use App\Http\Controllers\backend\AdmGigFeaturesController;
use App\Http\Controllers\backend\ServicesController;
use App\Http\Controllers\backend\AdmProductController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('front.home');
Route::get('page/{Page:slug}', [PageController::class, 'index'])->name('front.home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->prefix('admservices')->group(function () {
    Route::post('/get-features', [ServicesController::class, 'gig_features'])->name('services.features');
    Route::post('/get-gigpackages', [ServicesController::class, 'gig_packages'])->name('services.gigpackages');
});

Route::middleware('auth')->prefix('admshit')->group(function () {
    Route::get('/profile', [AdmProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [AdmProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [AdmProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Our resource routes
    Route::get('dashboard', [AdmDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('portfolio/package/{gig_package_id}', [AdmPortfoliosController::class, 'byPackage'])->name('admin.portfolio.package');
    Route::resource('roles', AdmRoleController::class, ['as' => 'admin']);
    Route::resource('users', AdmUserController::class, ['as' => 'admin']);
    Route::resource('gigs', AdmGigsController::class, ['as' => 'admin']);
    Route::resource('gigmedias', AdmGigMediasController::class, ['as' => 'admin']);
    Route::resource('gigpackages', AdmGigPackagesController::class, ['as' => 'admin']);
    Route::resource('gigfeatures', AdmGigFeaturesController::class, ['as' => 'admin']);
    Route::resource('artists', AdmArtistsController::class, ['as' => 'admin']);
    Route::resource('artistmedias', AdmArtistMediasController::class, ['as' => 'admin']);
    Route::resource('orders', AdmOrdersController::class, ['as' => 'admin']);
    Route::resource('customers', AdmCustomersController::class, ['as' => 'admin']);
    Route::resource('schedules', AdmSchedulesController::class, ['as' => 'admin']);
    Route::resource('pages', AdmPagesController::class, ['as' => 'admin']);
    Route::resource('pages', AdmPageMediasController::class, ['as' => 'admin']);
    Route::resource('users', AdmUsersController::class, ['as' => 'admin']);
    Route::resource('siteconfigs', AdmSiteconfigsController::class, ['as' => 'admin']);
    Route::resource('portfolios', AdmPortfoliosController::class, ['as' => 'admin']);
    //Route::resource('products', AdmProductController::class);
});

require __DIR__.'/auth.php';
