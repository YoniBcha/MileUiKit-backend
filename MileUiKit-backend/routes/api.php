<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/products', function () {
    return response()->json(['message' => 'Hello from Products API']);
});