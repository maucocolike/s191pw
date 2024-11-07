<?php

use Illuminate\Support\Facades\Route;



Route::post('/',[Controller::class,'FormRequest'])->name('FormRequest');