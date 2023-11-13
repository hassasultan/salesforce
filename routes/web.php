<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\TeamController;
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
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return true;
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function()
{
    return "Under Construction...";
})->name('about');
// Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', function () {
    return "Under Construction...";

})->name('contact');
// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');


Auth::routes();
Route::prefix('/admin')->group(function (){
Route::middleware(['auth'])->group(function () {
        Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');
        Route::post('/set-home-setting', [App\Http\Controllers\AdminController::class, 'home_setting'])->name('admin.home.setting');
        Route::get('/about/setting', [App\Http\Controllers\AdminController::class, 'about'])->name('admin.about');
        Route::post('/set-about-setting', [App\Http\Controllers\AdminController::class, 'about_setting'])->name('admin.about.setting');
        Route::resource('/team-management', TeamController::class);
        Route::resource('/client-management', ClientController::class);


    });
});

