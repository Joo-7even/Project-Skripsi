<?php

use App\Models\Tabel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TabelController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;
use App\Models\Dashboard;
use Spatie\Permission\Contracts\Role;

// Route::get('/', function () {
//     return view('auth.login');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
});

Route::get('/tables', [TabelController::class, 'index'])->name('tables.index');

Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
Route::resource('/uploads',UploadController::class);
Route::resource('/tables',TabelController::class);
Route::resource('/usermanagement', UserController::class);
// routes/web.php

require __DIR__.'/auth.php';
