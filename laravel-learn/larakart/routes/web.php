<?php
//use App\http\Controllers\User\HomepageController;
use App\Http\Controllers\User\HomepageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class,'home']);
