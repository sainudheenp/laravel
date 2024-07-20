<?php
//use App\http\Controllers\User\HomepageController;
use App\Http\Controllers\Admin\LoginController ;
use Illuminate\Support\Facades\Route;



// Route::group(['name'=>'admin.'],function () {
//     Route::get('/admin/login', [LoginController::class,'login']);
//     Route::get('/admin/do-login',[LoginController::class,'doLogin'])->name('do.login');
// });
Route::name('admin.')->group(function () {
    Route::get('/admin/login', [LoginController::class,'login']);
    Route::post('/admin/do-login',[LoginController::class,'doLogin'])->name('do.login');
});
