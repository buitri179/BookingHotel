<?php

use App\Http\Controllers\AdminTemplateController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/admintemplate', [AdminTemplateController::class,'admintemplate']);
