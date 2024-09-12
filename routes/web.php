<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee_index', [UserController::class, 'index'] )->name('employee.index');

Route::get('/employee_create', [UserController::class, 'create'] )->name('employee.create');

Route::post('/employee_store', [UserController::class, 'store'] )->name('employee.store');