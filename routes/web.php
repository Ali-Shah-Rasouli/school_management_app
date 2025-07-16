<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClassCategoryController;

Route::get('/', function () {
    return view('welcome');
});

 
Auth::routes();
// Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('users', UserController::class);


//...................................................

Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('home', [UserController::class, 'index'])->name('home');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::get('/admin/classcategory}', [ClassCategoryController::class, 'index'])->name('admin.classcategory.index');
Route::get('/admin/classcategory/create}', [ClassCategoryController::class, 'create'])->name('admin.classcategory.create');
Route::get('/admin/classcategory/store}', [ClassCategoryController::class, 'store'])->name('admin.classcategory.store');


 