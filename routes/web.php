<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Home@index')->name('home');
Route::get('/register', function() {
	return view('public.register');
})->name('register');
Route::get('/login', function() {
	return view('public.login');
})->name('login');
Route::post('/_register', 'Home@register')->name('_register');
Route::post('/_login', 'Home@login')->name('_login');
Route::get('/logout', 'Home@userExit')->name('logout');
Route::get('/blog', function() {
	return view('public.blog');
})->name('blog');
Route::get('/admin', function() {
	return view('admin.dashboard');
})->name('admin');

// admin
Route::get('/admin/content', 'Admin@content')->name('content');
Route::get('/admin/users', 'Admin@users')->name('users');
Route::get('/admin/contact', 'Admin@contact')->name('contact');
Route::get('/admin/setting', 'Admin@setting')->name('setting');