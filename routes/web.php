<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;

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

Route::view('/', "welcome");
Route::view('/about', "pages.about")->name('pages.about');

// Route::group(['middleware' => ["auth"]],function(){
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
// });


Route::resource('posts', PostController::class);

require __DIR__.'/auth.php';
