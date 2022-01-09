<?php

use Illuminate\Support\Facades\Route;

// redirection
Route::redirect('/', 'Page1', 301);

// simple routing
Route::view('Page3', 'Page3', ['page' => 'Page 3 : At End']);
Route::view('NotFound', 'NotFound', ['page' => 'Page 3 : At End']);

// parse data with url
Route::get('test/{name}', function ($name) {
    return view('test', ['name' => $name]);
});

// Function Group
Route::group(['middleware' => ['customAuth']], function () {
    Route::get('Page1', function () {
        return view('Page1', [
            'page' => 'Page 1 : The Beginning',
        ]);
    });
    Route::view('Page2', 'Page2', ['page' => 'Page 2 : Just Conclusion']);
});

// Fallback Routing
Route::fallback(function () {
    return view('NotFound');
});
