<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\MileStoneCountroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MultipleImagesController;
use App\Http\Controllers\NewsArticlesController;
use App\Http\Controllers\StaticPageController;

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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get( 'myfile/years/{filename}', [PageController::class, 'file'])->where('filename', '.*')->middleware('admin.user');

Route::get('/trial',function(){
    return view('welcome');
});

Route::get('automative-lubricants', [PageController::class, 'automativeLubricants'])->name('automativeLubricants');
Route::get('automative-lubricants/{slug}', [PageController::class, 'automativeLubricantsDetail'])->name('automativeLubricantsDetail');

Route::get('industrial-lubricants', [PageController::class, 'industrialLubricants'])->name('industrialLubricants');
Route::get('industrial-lubricants/{slug}', [PageController::class, 'industrialLubricantsDetail'])->name('industrialLubricantsDetail');

Route::get('metal-working-and-speciality-lubricants', [PageController::class, 'metalWorkingAndSpecialityLubricants'])->name('metalWorkingAndSpecialityLubricants');
Route::get('metal-working-and-speciality-lubricants/{slug}', [PageController::class, 'metalWorkingAndSpecialityLubricantsDetail'])->name('metalWorkingAndSpecialityLubricantsDetail');

// Route::get('automative-lubricants', [PageController::class, 'automativeLubricants'])->name('automativeLubricants');
// Route::get('automative-lubricants/{slug}', [PageController::class, 'automativeLubricantsDetail'])->name('automativeLubricantsDetail');
// static Page Controller

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/homepage',[HomePageController::class,'index'])->name('homepage.index')->middleware('admin.user');
    Route::post('/homepage', [HomePageController::class, 'store']);
    Route::get('/fetchData', [HomePageController::class, 'fetchData']);
    Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus.index')->middleware('admin.user');
    Route::post('/aboutus', [AboutUsController::class, 'store']);
    Route::get('/aboutus/fetchData', [AboutUsController::class, 'fetchData']);
    Route::post('/milestone',[MileStoneCountroller::class, 'store']);
    Route::get('/milestone', [MileStoneCountroller::class, 'fetchData']);
    Route::get('/livewire', [HomePageController::class,'trial'])->middleware('admin.user');
    
    // newsarticle admin section
        // fetching categories
    Route::get('/fetchPrintCoverage',[NewsArticlesController::class,'fetchPrintCoverage']);
    Route::get('/fetchOnlineCoverage', [NewsArticlesController::class, 'fetchOnlineCoverage']);
        // storing/updating datas
    Route::post('/newsArticles',[NewsArticlesController::class,'newsArticles']);
    Route::get('/fetchNewsArticles',[NewsArticlesController::class,'fetchNewsArticles']);
});


Route::get('/{slug}', [StaticPageController::class, 'index']);
