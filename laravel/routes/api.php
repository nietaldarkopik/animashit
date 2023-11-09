<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\ApiServicesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/services/getCountriesList', [ApiServicesController::class, 'getCountriesList'])->name('front.services.get_countries_list');
Route::post('/services/getCountriesDetail', [ApiServicesController::class, 'getCountriesDetail'])->name('front.services.get_countries_detail');
Route::post('/services/getGigsList', [ApiServicesController::class, 'getGigsList'])->name('front.services.get_gigs_list');
Route::post('/services/getGigsDetail', [ApiServicesController::class, 'getGigsDetail'])->name('front.services.get_gigs_detail');
Route::post('/services/getGigFeaturesList', [ApiServicesController::class, 'getGigFeaturesList'])->name('front.services.get_gig_features_list');
Route::post('/services/getGigFeaturesDetail', [ApiServicesController::class, 'getGigFeaturesDetail'])->name('front.services.get_gig_features_detail');
Route::post('/services/getGigMediasList', [ApiServicesController::class, 'getGigMediasList'])->name('front.services.get_gig_medias_list');
Route::post('/services/getGigMediasDetail', [ApiServicesController::class, 'getGigMediasDetail'])->name('front.services.get_gig_medias_detail');
Route::post('/services/getGigPackagesList', [ApiServicesController::class, 'getGigPackagesList'])->name('front.services.get_gig_packages_list');
Route::post('/services/getGigPackagesDetail', [ApiServicesController::class, 'getGigPackagesDetail'])->name('front.services.get_gig_packages_detail');
Route::post('/services/getGigPackageExtrasList', [ApiServicesController::class, 'getGigPackageExtrasList'])->name('front.services.get_gig_package_extras_list');
Route::post('/services/getGigPackageExtrasDetail', [ApiServicesController::class, 'getGigPackageExtrasDetail'])->name('front.services.get_gig_package_extras_detail');
Route::post('/services/getGigPackageFeaturesList', [ApiServicesController::class, 'getGigPackageFeaturesList'])->name('front.services.get_gig_package_features_list');
Route::post('/services/getGigPackageFeaturesDetail', [ApiServicesController::class, 'getGigPackageFeaturesDetail'])->name('front.services.get_gig_package_features_detail');
Route::post('/services/getGigPackageHeadList', [ApiServicesController::class, 'getGigPackageHeadList'])->name('front.services.get_gig_package_head_list');
Route::post('/services/getGigPackageHeadDetail', [ApiServicesController::class, 'getGigPackageHeadDetail'])->name('front.services.get_gig_package_head_detail');
Route::post('/services/getGigPackageMediasList', [ApiServicesController::class, 'getGigPackageMediasList'])->name('front.services.get_gig_package_medias_list');
Route::post('/services/getGigPackageMediasDetail', [ApiServicesController::class, 'getGigPackageMediasDetail'])->name('front.services.get_gig_package_medias_detail');
Route::post('/services/getPackagesList', [ApiServicesController::class, 'getPackagesList'])->name('front.services.get_packages_list');
Route::post('/services/getPackagesDetail', [ApiServicesController::class, 'getPackagesDetail'])->name('front.services.get_packages_detail');
Route::post('/services/getPagesList', [ApiServicesController::class, 'getPagesList'])->name('front.services.get_pages_list');
Route::post('/services/getPagesDetail', [ApiServicesController::class, 'getPagesDetail'])->name('front.services.get_pages_detail');
Route::post('/services/getPortfoliosList', [ApiServicesController::class, 'getPortfoliosList'])->name('front.services.get_portfolios_list');
Route::post('/services/getPortfoliosDetail', [ApiServicesController::class, 'getPortfoliosDetail'])->name('front.services.get_portfolios_detail');
Route::post('/services/getPortfolioMediasList', [ApiServicesController::class, 'getPortfolioMediasList'])->name('front.services.get_portfolio_medias_list');
Route::post('/services/getPortfolioMediasDetail', [ApiServicesController::class, 'getPortfolioMediasDetail'])->name('front.services.get_portfolio_medias_detail');
Route::post('/services/getProfilesList', [ApiServicesController::class, 'getProfilesList'])->name('front.services.get_profiles_list');
Route::post('/services/getProfilesDetail', [ApiServicesController::class, 'getProfilesDetail'])->name('front.services.get_profiles_detail');
Route::post('/services/getSchedulesList', [ApiServicesController::class, 'getSchedulesList'])->name('front.services.get_schedules_list');
Route::post('/services/getSchedulesDetail', [ApiServicesController::class, 'getSchedulesDetail'])->name('front.services.get_schedules_detail');
Route::post('/services/getScheduleItemsList', [ApiServicesController::class, 'getScheduleItemsList'])->name('front.services.get_schedule_items_list');
Route::post('/services/getScheduleItemsDetail', [ApiServicesController::class, 'getScheduleItemsDetail'])->name('front.services.get_schedule_items_detail');
Route::post('/services/getScheduleItemTypesList', [ApiServicesController::class, 'getScheduleItemTypesList'])->name('front.services.get_schedule_item_types_list');
Route::post('/services/getScheduleItemTypesDetail', [ApiServicesController::class, 'getScheduleItemTypesDetail'])->name('front.services.get_schedule_item_types_detail');
Route::post('/services/getScheduleStatusList', [ApiServicesController::class, 'getScheduleStatusList'])->name('front.services.get_schedule_status_list');
Route::post('/services/getScheduleStatusDetail', [ApiServicesController::class, 'getScheduleStatusDetail'])->name('front.services.get_schedule_status_detail');
Route::post('/services/getSettingsList', [ApiServicesController::class, 'getSettingsList'])->name('front.services.get_settings_list');
Route::post('/services/getSettingsDetail', [ApiServicesController::class, 'getSettingsDetail'])->name('front.services.get_settings_detail');
Route::post('/services/getYoutubeUrl', [ApiServicesController::class, 'getYoutubeUrl'])->name('front.services.get_youtube_url');