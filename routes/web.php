<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/mainstories', [HomeController::class, 'mainstories'])->name('mainstories');
Route::get('/weather', [HomeController::class, 'weather'])->name('weather');
Route::get('/special', [HomeController::class, 'special'])->name('special');
Route::get('/kanpurcentral', [HomeController::class, 'kanpurcentral'])->name('kanpurcentral');
Route::get('/bithoor', [HomeController::class, 'bithoor'])->name('bithoor');
Route::get('/iit', [HomeController::class, 'iit'])->name('iit');
Route::get('/art', [HomeController::class, 'art'])->name('art');
Route::get('/temple', [HomeController::class, 'temple'])->name('temple');
Route::get('/company', [HomeController::class, 'company'])->name('company');
Route::get('/rich', [HomeController::class, 'rich'])->name('rich');
Route::get('/food', [HomeController::class, 'food'])->name('food');
Route::get('/manchester', [HomeController::class, 'manchester'])->name('manchester');
Route::get('/famous',[HomeController::class, 'famous'])->name('famous');
Route::get('/college',[HomeController::class, 'college'])->name('college');