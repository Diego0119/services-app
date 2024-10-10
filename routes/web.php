<?php

use App\Http\Controllers\CommunesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\MyNoticesController;
use App\Http\Controllers\UploadNoticeController;


Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/details', [DetailsController::class, 'index'])->name('details.index');
Route::get('/account', [AccountController::class, 'index'])->name('account.index');
Route::get('/upload-notice', [UploadNoticeController::class, 'index'])->name('upload-notice.index');
Route::post('/upload-notice', [UploadNoticeController::class, 'store'])->name('upload-notice.store');
Route::get('/my-notices', [MyNoticesController::class, 'index'])->name('my-notices.index');
Route::get('get-communes/{region_id}', [CommunesController::class, 'getCommunes']);
Route::get('/category/{id}', [CategoryController::class, 'showCategory'])->name('category.show');
Route::get('/notice/{id}', [NoticeController::class, 'showNotice'])->name('notice.show');


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
