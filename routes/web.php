<?php
     use App\Http\Controllers\HomeController;
     use App\Http\Controllers\AdminController;
     use App\Http\Controllers\AuthController;
     use Illuminate\Support\Facades\Route;

     Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
     Route::post('/login', [AuthController::class, 'login']);
     Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
     Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
     Route::post('/register', [AuthController::class, 'register']);

     Route::get('/', [HomeController::class, 'index'])->name('home');
     Route::post('/contact', [HomeController::class, 'storeContact'])->name('contact.store');
     Route::get('/services/{id}', [HomeController::class, 'showService'])->name('service.detail');
     Route::prefix('admin')->group(function () {
         Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
         Route::get('/services', [AdminController::class, 'services'])->name('admin.services');
         Route::post('/services', [AdminController::class, 'storeService'])->name('admin.services.store');
         Route::put('/services/{service}', [AdminController::class, 'updateService'])->name('admin.services.update');
         Route::delete('/services/{service}', [AdminController::class, 'deleteService'])->name('admin.services.delete');
         Route::get('/contacts', [AdminController::class, 'contacts'])->name('admin.contacts');
         Route::delete('/contacts/{contact}', [AdminController::class, 'deleteContact'])->name('admin.contacts.delete');
     });
     ?>