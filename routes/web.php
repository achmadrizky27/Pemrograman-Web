<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardMarketplaceController;

/* =======================================
                    PAGES   
   ======================================= */
Route::get('/', function () {return view('layout/home');});
Route::get('/home', function () {return view('layout/home');});
Route::get('/praktikumsite', function () {return view('layout/praktikumsite');});
Route::get('/ecourse', function () {return view('layout/ecourse');});

/* ======================================= 
                 MAREKTPLACE
   ======================================= */
// File : login.blade.php
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);

// File : register.blade.php
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// File : dashboard.blade.php
Route::get('/dashboard', function () {return view('marketplace.dashboard');})->middleware('auth');

// File : viewproduct.blade.php
Route::get('/viewproduct', function () {return view('marketplace.viewproduct');})->middleware('auth');