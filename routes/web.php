<?php

use App\Http\Controllers\CVController;
use App\Livewire\HomePage;
use App\Livewire\AboutPage;
use App\Livewire\ArticlesPage;
use App\Livewire\ProjectsPage;
use App\Livewire\ServicesPage;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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



Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get(uri: '/', action: HomePage::class)->name('home-page');
    Route::get('/about', AboutPage::class)->name('about');
    Route::get('/projects', ProjectsPage::class)->name('projects');
    Route::get('/articles', ArticlesPage::class)->name('articles');
    Route::get('/cv', CVController::class)->name('fetchCV');
    Route::get('/cv/{user}/{type}', CVController::class)->name('fetchCV');
    Route::get('/services', ServicesPage::class)->name('services');
});
