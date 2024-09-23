<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Detail2Controller;
use App\Http\Controllers\Detail3Controller;
use App\Http\Controllers\Detail4Controller;
use App\Http\Controllers\ProjectController;

Route::resource('/', HomeController::class);
Route::resource('/about', AboutController::class);
Route::resource('/project', ProjectController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/detail', DetailController::class);
Route::resource('/detail2', Detail2Controller::class);
Route::resource('/detail3', Detail3Controller::class);
Route::resource('/detail4', Detail4Controller::class);