<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/index', [FeedbackController::class, 'index'])->name('index');
Route::get('/about', [FeedbackController::class, 'about'])->name('about');
Route::get('/DonorReg', [FeedbackController::class, 'donor'])->name('donor');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('/display', [FeedbackController::class, 'show'])->name('display');
Route::delete('/delete/{id}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
Route::get('/edit/{id}',[FeedbackController::class,'edit'])->name('edit');
Route::post('/update/{id}', [FeedbackController::class, 'update'])->name('update');