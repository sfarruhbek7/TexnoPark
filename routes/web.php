<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return redirect()->route('index'); });
Route::get('/index', function () { return view('index'); })->name('index');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/project', function () { return view('project'); })->name('project');
Route::get('/contact', function () { return view('contact'); })->name('contact');
