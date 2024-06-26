<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class,'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Backend routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [BackendController::class, 'dashboard'])->name('backend.dashboard');
    // showcase routes
    Route::get('/content-management/showcase', [BackendController::class, 'showcase'])->name('backend.showcase');
    Route::post('/content-management/showcase', [BackendController::class, 'update_showcase'])->name('store.showcase');
    // cta routes
    Route::get('/content-management/call-to-action', [BackendController::class, 'cta'])->name('cta');
    Route::post('/content-management/call-to-action', [BackendController::class, 'update_cta'])->name('store.cta');

    // story routes
    Route::get('/content-management/story', [BackendController::class, 'story'])->name('backend.story');
    Route::post('/content-management/story', [BackendController::class, 'update_story'])->name('store.story');

    // services routes
    Route::get('/content-management/services', [BackendController::class, 'list_services'])->name('backend.list.service');
    Route::get('/content-management/service/add', [BackendController::class, 'add_services'])->name('backend.add.service');
    Route::get('/content-management/service/edit/{service}', [BackendController::class, 'edit_services'])->name('edit.services');
    Route::post('/content-management/service/update', [BackendController::class, 'update_services'])->name('update.services');
    Route::get('/content-management/service/delete/{service}', [BackendController::class, 'delete_services'])->name('delete.services');
    Route::post('/content-management/service/store', [BackendController::class, 'store_services'])->name('store.service');

    // pricing routes
    Route::get('/content-management/pricing', [BackendController::class, 'list_pricing'])->name('backend.list.pricing');
    Route::get('/content-management/pricing/add', [BackendController::class, 'add_pricing'])->name('backend.add.pricing');
    Route::get('/content-management/pricing/edit/{pricing}', [BackendController::class, 'edit_pricing'])->name('edit.pricing');
    Route::post('/content-management/pricing/update', [BackendController::class, 'update_pricing'])->name('update.pricing');
    Route::get('/content-management/pricing/delete/{pricing}', [BackendController::class, 'delete_pricing'])->name('delete.pricing');
    Route::post('/content-management/pricing/store', [BackendController::class, 'store_pricing'])->name('store.pricing');
});



require __DIR__.'/auth.php';
