<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/hello', function(){
    return "hello";
})->name('hello');

Route::get('/hallo', function(){
    return redirect() -> route('');
});

Route::get('/greet/{name}', function($name){
    return "Hello {$name}";
});

Route::fallback(function() {echo "still get somewhere!";}); 