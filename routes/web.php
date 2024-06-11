<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Models\Gallery;
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

Route::get('/', function () {
    return view('user.sections.home');
});
Route::get('/galery', function () {
    $galery = Gallery::all();
    return view('user.sections.galery',[
        'galery' => $galery
    ]);
});
Route::get('/testimoni', function () {
    return view('user.sections.testimoni');
});
Route::get('/layanan', function () {
    return view('user.sections.layanan');
});




Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.sections.dashboard');
    })->name('dashboard');
    Route::resource('dashboard-galery', GalleryController::class);
    Route::get('/dashboard-galery-trash',[GalleryController::class, 'trash']);
    Route::get('/dashboard-galery-resore/{id}',[GalleryController::class, 'restore']);
    Route::delete('/dashboard-galery-permanentlydelete/{id}', [GalleryController::class, 'permanentlydelete']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
