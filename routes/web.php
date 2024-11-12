<?php

use App\Http\Controllers\CommunesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\MyNoticesController;
use App\Http\Controllers\UploadNoticeController;
use App\Http\Middleware\CheckIfNoticeIsHighlighted;




Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/details', [DetailsController::class, 'index'])->name('details.index');
Route::get('/account', [AccountController::class, 'index'])->name('account.index');
Route::get('/upload-notice', [NoticeController::class, 'uploadNotice'])->name('upload-notice.index');
Route::post('/upload-notice', [NoticeController::class, 'store'])->name('upload-notice.store');
Route::get('/my-notices', [MyNoticesController::class, 'index'])->name('my-notices.index');
Route::get('get-communes/{region_id}', [CommunesController::class, 'getCommunes']);
Route::get('/category/{id}', [CategoryController::class, 'showCategory'])->name('category.show');
Route::get('/notice/{id}', [NoticeController::class, 'showNotice'])->name('notice.show');
Route::get('/notice-modify/{id}', [NoticeController::class, 'modifyNotice'])->name('notice.modify');
Route::post('/notice-modify/{id}', [NoticeController::class, 'storeModifiedNotice'])->name('notice.update');
Route::get('/privacy-policies', function () {
    return view('privacy-policies.index');
})->name('policies');
Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');
Route::get('/services', function () {
    return view('services.index');
})->name('services');
Route::get('/comeback', function () {
    return view('comeback.index');
})->name('comeback');

Route::get('/search-notice', [NoticeController::class, 'searchNotices'])->name('search-notice');

Route::post('/notice-modify/{id}/up-to-gallery', [NoticeController::class, 'storeModifiedNotice'])->name('up-to-gallery.post');
Route::get('/notice-modify/{id}/up-to-gallery', function ($id) {
    return view('up-to-gallery.index', ['notice_id' => $id]);
})->middleware(CheckIfNoticeIsHighlighted::class)->name('up-to-gallery.get');


// search route

Route::get("search", [NoticeController::class, 'search'])->name('search');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
