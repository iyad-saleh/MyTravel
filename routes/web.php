<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MycompanyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
 
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ], function () {

     Route::resource('companies', CompanyController::class);       
     Route::get('/mycompany', [MycompanyController::class, 'index'])->name('mycompany.index');

     Route::get('/{page}', [AdminController::class, 'index']);
           });


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/{page}', [App\Http\Controllers\AdminController::class, 'index']);
// Route::get('/{page}', 'AdminController@index');