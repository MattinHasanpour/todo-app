<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController; // اضافه کردن کنترلر جدید
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about'); // اصلاح مسیر

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/services', [ServicesController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/sign', [SignController::class, 'index']);

Route::get('/blog', function () {
    return view('blog');
});

// Todo routes
Route::group(['prefix'=>'todos'], function () {
    Route::get('/', [TodoController::class, 'index'])->name('todos');
    Route::get('/create', [TodoController::class, 'create'])->name('todos.create');
    Route::get('/{todo}', [TodoController::class, 'show'])->name('todos.show');
    Route::get('/{todo}/completed', [TodoController::class, 'completed'])->name('todos.completed');
    Route::get('/{todo}/edit', [TodoController::class, 'edit'])->name('todos.edit');
    Route::put('/{todo}', [TodoController::class, 'update'])->name('todos.update');
    Route::delete('/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
    Route::post('/store', [TodoController::class, 'store'])->name('todos.store');
});

// Crtegory routes

Route::group(['prefix'=>'categories'], function (){
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::post('/', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
});

