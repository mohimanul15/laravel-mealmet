<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/recipes', function (){
    return view('recipes');
});

Route::get('/why-mealmet', function (){
    return view('why-mealmet');
});

Route::get('/blog', function (){
    return view('blog');
});

Route::fallback(function (){
    return view('404');
});
