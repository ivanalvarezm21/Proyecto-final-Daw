<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Admin\AdminController;
    
    Route::get('admin',[AdminController::class, 'index'])->name('admin.index');

    Route::prefix('admin')->group(function () {
        Route::get('/index',[AdminController::class, 'index']);
        Route::get('/list_users',[AdminController::class, 'list_users']);
        Route::get('/list_coches',[AdminController::class, 'list_coches']);
        Route::get('/create_coches',[AdminController::class, 'create_coches']);
    });

    Route::resource('users', UserController::class);
?>