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
use App\Http\Controllers\backend\AdmPortfolioMediaController;
use App\Http\Controllers\backend\AdmProductController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\frontend\PageModalController;
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
Route::get('page/artist/{id}', [PageController::class, 'artistDetail'])->name('front.artist.detail');
Route::post('send-contact', [PageController::class, 'sendContact'])->name('contact.send');
Route::get('thanks-contact', [PageController::class, 'thankContact'])->name('contact.thanks');

Route::get('modal/artist-detail/{id}/{gig_id?}', [PageModalController::class, 'artistDetail'])->name('modal.artist.detail');
Route::get('modal/artist-portfolios/{id}/{gig_id?}', [PageModalController::class, 'artistPortfolios'])->name('modal.artist.portfolios');
Route::get('modal/portfolio-detail/{id}', [PageModalController::class, 'portfolioDetail'])->name('modal.portfolio.detail');
Route::get('modal/gig-detail/{id}', [PageModalController::class, 'gigDetail'])->name('modal.gig.detail');
Route::get('modal/schedule-artist/{id}', [PageModalController::class, 'scheduleArtist'])->name('modal.schedule.artist');
Route::get('modal/page/{Modal:slug}', [PageModalController::class, 'index'])->name('modal.page');


Route::get('dashboard', [AdmDashboardController::class, 'index'])->name('admin.dashboard0')->middleware(['auth', 'verified'])->name('dashboard');

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
    Route::get('profile/settings/{id?}', [AdmProfilesController::class, 'settings'])->name('admin.account.settings');
    Route::get('profile/password/{id?}', [AdmProfilesController::class, 'password'])->name('admin.account.password');
    Route::get('gigmedias/bygig/{id?}', [AdmGigMediasController::class,'byGig'])->name('admin.gigmedias.bygig');
    Route::post('gigmedias/bygig', [AdmGigMediasController::class,'byGig'])->name('admin.gigmedias.bygigpost');
    Route::post('gigfeatures/index', [AdmGigFeaturesController::class,'index'])->name('admin.gigfeatures.post');
    Route::post('gigpackages/index', [AdmGigPackagesController::class,'index'])->name('admin.gigpackages.post');
    Route::match(array('GET', 'POST'),'portfolios/filter', [AdmPortfoliosController::class, 'index'])->name('admin.portfolios.filter');

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
    Route::resource('portfoliomedias', AdmPortfolioMediaController::class, ['as' => 'admin']);
    //Route::resource('products', AdmProductController::class);
});

require __DIR__.'/auth.php';
