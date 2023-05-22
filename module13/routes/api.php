<?php

use App\Http\Controllers\NameController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ResponseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/name',[NameController::class,'name_request']);
Route::get('/page',[PageController::class,'pageRequest']);
Route::get('/response',[ResponseController::class,'response']);
Route::post('/upload', function (Request $request) {
    if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        $filename = $file->getClientOriginalName();
        $path = $file->storeAs('uploads', $filename, 'public');
        // The file has been uploaded and stored in the 'public/uploads' directory
        
        // You can save the file path or perform any other logic here
        
        return 'File uploaded successfully!';
    }

    return 'No file uploaded.';
});