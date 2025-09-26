<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('test', function (Request $request) {
    return response()->json(['status' => true, 'message' => 'Hola mundo']);
});


Route::apiResource('books', BookController::class);
