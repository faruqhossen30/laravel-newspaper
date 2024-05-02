<?php

use App\Http\Controllers\Admin\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Ads\AdsControllre;
use App\Http\Controllers\Admin\Ajax\AjaxCategoryController;
use App\Http\Controllers\Admin\Ajax\AjaxSubCategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\Blog\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Admin\Setting\ChatSectionController;
use App\Http\Controllers\Admin\Setting\SiteSettingController;
use App\Http\Controllers\Admin\Setting\WebsiteSettingController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\Vot\VotController;

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('role',       RoleController::class);
    Route::resource('admin',      AdminController::class);
    Route::resource('blog',       BlogController::class);
    Route::get(     'dashboard',  [DashboardController::class, 'index'])->name('dashboard');
    // Route::resource('role', RoleController::class);
    // Start Work

    Route::resource('category',           CategoryController::class);
    Route::resource('subcategory',        SubCategoryController::class);
    Route::resource('user',               UserController::class);
    Route::resource('post',               PostController::class);
    Route::resource('vot',                VotController::class);
    Route::resource('ads',                AdsControllre::class);

    // Ajax Calling
    // Route::get('ajax/subcategory/{id}', [AjaxSubCategoryController::class, 'subcategoryByCategoryId']);
    Route::get('category-to-subcategory/{id}', [AjaxCategoryController::class, 'CategorytoSubcategory'])->name('categorytosubcategory');

    Route::group(['prefix' => 'setting'], function () {
        Route::get('/', [SettingController::class, 'index'])->name('settingpage');
        Route::get('/site-setting', [SiteSettingController::class, 'sitesetting'])->name('sitesetting');
        Route::get('/chat-section', [ChatSectionController::class, 'chatsection'])->name('chatsection');
        Route::get('/website-setting', [WebsiteSettingController::class, 'websitesetting'])->name('website.setting');
        Route::post('/website-setting/{id}', [WebsiteSettingController::class, 'websitestoresetting'])->name('website.setting.store');
    });
});
