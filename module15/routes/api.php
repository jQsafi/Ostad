<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::post("/registration",[RegistrationController::class,'register']);