<?php

use App\Http\Controllers\detailController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\manageUserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\updateProductController;
use App\Http\Controllers\updateUserController;
use Illuminate\Support\Facades\Route;


Route::get('/home',[updateProductController::class, 'list']);
Route::get('/admin', function(){return view('adminhome');})->middleware('admin');

Route::get('/register', function () {return view('register');});
Route::post('/store',[registerController::class, 'store']);

Route::get('/login', [loginController::class, 'index'])->middleware('guest');
Route::post('/login', [loginController::class, 'login'])->middleware('guest');
Route::get('/logout', [loginController::class, 'logout']);

Route::get('/insertproduct', [ProductController::class, 'index']);
Route::post('/insertproduct', [ProductController::class, 'store']);
Route::get('/edit/{id}', [updateProductController::class, 'edit']);
Route::post('/update/{id}', [updateProductController::class, 'update']);

Route::get('/manageuser', [manageUserController::class, 'list']);
Route::get('/delete/{id}', [manageUserController::class, 'delete']);

Route::get('/edituser', [updateUserController::class, 'edit']);
Route::post('/updateuser', [updateUserController::class, 'update']);

Route::get('/product/{product}/detail',[detailController::class,'index'])->name('productdetail');;
