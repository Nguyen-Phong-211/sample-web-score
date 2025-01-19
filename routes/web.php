<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboradController;
use App\Http\Controllers\Report\ReportController;
use App\Http\Controllers\Search\SearchController;
use App\Http\Controllers\Setting\SettingController;

// Dashborad
Route::get('/', [DashboradController::class, 'index'])->name('dashboard.index');

// Search score
Route::get('/search', [SearchController::class, 'index'])->name('search.index');
Route::post('/search', [SearchController::class, 'index'])->name('search.index.submit');
Route::get('/suggestions', [SearchController::class, 'suggest'])->name('search.suggest');

// Report
Route::get('/report', [ReportController::class, 'index'])->name('report.index');

// Setting
Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');


