<?php

use App\Http\Controllers\EntrepreneurshipController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\InvestorApplicationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group([
        'middleware'=>['auth'],
        'prefix'=>'entrepreneurship',
        'controller'=> EntrepreneurshipController::class,
    ], function(){
        Route::get('/','list')->name('entrepreneurships.list')->middleware('role:Emprendedor');
        Route::get('/create/','create')->name('entrepreneurships.create')->middleware('role:Emprendedor');
        Route::post('/','store')->name('entrepreneurships.store')->middleware('role:Emprendedor');
        Route::get('/edit/{id}','edit')->name('entrepreneurships.edit')->middleware('role:Emprendedor');
        Route::patch('/update/', 'update')->name('entrepreneurships.update')->middleware('role:Emprendedor');
        Route::get('/{id}','show')->name('entrepreneurships.show')->middleware('role:Emprendedor');
});

Route::group([
    'middleware'=>['auth'],
    'prefix'=>'investment',
    'controller'=> InvestmentController::class,
], function(){
    Route::get('/','list')->name('investments')->middleware('role:Inversor');
    Route::get('/create/{id}','create')->name('investments.create')->middleware('role:Emprendedor');
    Route::post('/','store')->name('investments.store')->middleware('role:Emprendedor');
    Route::get('/{id}','edit')->name('investments.edit')->middleware('role:Emprendedor');
    Route::patch('/update/','update')->name('investments.update')->middleware('role:Emprendedor');
});

Route::group([
    'middleware'=>['auth'],
    'prefix'=>'investors',
    'controller'=> InvestorApplicationController::class,
], function(){
    Route::get('/list','myInvestor')->name('investors.myInvestor')->middleware('role:Inversor');
    Route::get('/{id}','store')->name('investors.store')->middleware('role:Inversor');
});


require __DIR__.'/auth.php';
