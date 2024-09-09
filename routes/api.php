<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/health', function () {
    return \Illuminate\Support\Facades\Response::json(['result' => 'ok']);
});

Route::get('/hello', function () {
    return \Illuminate\Support\Facades\Response::json(['result' => 'hello']);
});
