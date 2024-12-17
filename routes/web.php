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
use App\Http\Middleware\CheckIfUserIsAdmin;

// Rutas publicas
Route::get('/', [WelcomeController::class, 'index'])->name('home'); // Home page
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index'); // List of categories
Route::get('/details', [DetailsController::class, 'index'])->name('details.index'); // Details page
Route::get('/contact', function () {
    return view('contact.index');
})->name('contact'); // Contact page

// Rutas de anuncios
Route::get('/upload-notice', [NoticeController::class, 'uploadNotice'])->name('upload-notice.index'); // Upload notice form
Route::post('/upload-notice', [NoticeController::class, 'store'])->name('upload-notice.store'); // Store uploaded notice
Route::get('/my-notices', [MyNoticesController::class, 'index'])->name('my-notices.index'); // User's own notices
Route::get('/notices', [NoticeController::class, 'getAllNotices'])->middleware(CheckIfUserIsAdmin::class)->name('get-all-notices'); // Admin view all notices
Route::get('/category/{id}', [CategoryController::class, 'showCategory'])->name('category.show'); // Show specific category
Route::get('/notice/{id}', [NoticeController::class, 'showNotice'])->name('notice.show'); // View a specific notice
Route::get('/notice-modify/{id}', [NoticeController::class, 'modifyNotice'])->name('notice.modify'); // Modify notice
Route::post('/notice-modify/{id}', [NoticeController::class, 'storeModifiedNotice'])->name('notice.update'); // Store modified notice
Route::get('/search-notice', [NoticeController::class, 'searchNotices'])->name('search-notice'); // Search for notices

// Rutas de destacados
Route::post('/notice-modify/{id}/up-to-gallery', [NoticeController::class, 'storeModifiedNotice'])->name('up-to-gallery.post'); // Store in gallery
Route::get('/notice-modify/{id}/up-to-gallery', function ($id) {
    return view('up-to-gallery.index', ['notice_id' => $id]);
})->middleware(CheckIfNoticeIsHighlighted::class)->name('up-to-gallery.get'); // View highlighted notice form

// Ruta de manejo de usuarios
Route::get('/users', [DashboardController::class, 'showUsers'])->middleware(CheckIfUserIsAdmin::class)->name('get-users'); // Admin view users
Route::get('/account', [AccountController::class, 'index'])->name('account.index');
Route::put('/account', [AccountController::class, 'modifyUserInformation'])->name('account.post');

// Ruta de busqueda
Route::get("search", [NoticeController::class, 'search'])->name('search'); // Global search

// Ruta de dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard'); // User dashboard

// Ruta de autenticacion
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit'); // Edit profile
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update'); // Update profile
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); // Delete profile
});


require __DIR__ . '/auth.php';
