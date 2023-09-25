<?php

use App\Http\Controllers\CVController;
use App\Http\Livewire\AboutPage;
use App\Http\Livewire\ArticlesPage;
use App\Http\Livewire\ProjectCalculator;
use App\Http\Livewire\ProjectsPage;
use App\Http\Livewire\ServicesPage;
use Illuminate\Support\Facades\Route;
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
    Route::get('/', \App\Http\Livewire\HomePage::class)->name('home-page');
    Route::get('/about', AboutPage::class)->name('about');
    Route::get('/projects', ProjectsPage::class)->name('projects');
    Route::get('/articles', ArticlesPage::class)->name('articles');
    Route::get('/cv', CVController::class)->name('fetchCV');
    Route::get('/cv/{user}/{type}', CVController::class)->name('fetchCV');
    Route::get('/services', ServicesPage::class)->name('services');
});
