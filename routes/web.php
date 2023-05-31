<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GameController;
use App\Http\Controllers\Admin\GenreController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { // da sloggato ti trovi qui
    return view('welcome');
});

// Route::get('/dashboard', function () {  //appena loggi vieni reind qui
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->prefix('admin')->name('dashboard');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    Route::resource('games',GameController::class);
    Route::resource('genres',GenreController::class);

    Route::get('/', function() {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
