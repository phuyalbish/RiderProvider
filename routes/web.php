<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CMSController;
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

Route::prefix('cms')->middleware('checkthecms')->group(function(){

    Route::get('dashboard', [CMSController::class,'CMSDashboard'])->name('cms.dashboard');


});

Route::prefix('cms')->middleware('checkthecmscookie')->group(function(){

    Route::get('login', [CMSController::class,'CMSLogin'])->name('cms.login');

});


Route::get('signout', [CMSController::class,'CmsSignOut'])->name('cms.signout');
Route::post('cms/loginCheck', [CMSController::class,'CMSLoginCheck'])->name('cms.loginCheck');
