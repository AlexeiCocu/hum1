<?php


use App\Http\Controllers\admin\LawyerController;
use App\Http\Controllers\lawyer\ClientController;
use App\Http\Controllers\lawyer\ProfileController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Inactive User
Route::get('/inactive', function () {
    return view('admin.inactive');
})->name('inactive');

Route::get('/', function () {
    return redirect()->intended('login');
});



Route::group(['prefix' => '/', 'middleware' => ['auth', 'checkActive']], function () {

    Route::group(['prefix' => 'admin', 'middleware' => 'can:access_role,"admin"'], function () {
        Route::get('/', [\App\Http\Controllers\admin\HomeController::class, 'index'])->name('admin-index');
        Route::resource('/lawyers', LawyerController::class)->names('admin-lawyers');
    });

    Route::group(['prefix' => 'lawyer', 'middleware' => 'can:access_role,"lawyer"'], function () {
        Route::get('/', [\App\Http\Controllers\lawyer\HomeController::class, 'index'])->name('lawyer-index');
        Route::resource('/clients', ClientController::class)->names('lawyer-clients');
        Route::resource('/profiles', ProfileController::class)->names('lawyer-profile');
    });

    Route::group(['prefix' => 'client', 'middleware' => 'can:access_role,"client"'], function () {
        Route::get('/', [\App\Http\Controllers\user\HomeController::class, 'index'])->name('user-index');
        Route::resource('/profiles', \App\Http\Controllers\user\ProfileController::class)->names('client-profile');

    });


});
