<?php
//use App\http\Controllers\User\HomepageController;
use App\Http\Controllers\Admin\LoginController ;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [LoginController::class,'login']);
