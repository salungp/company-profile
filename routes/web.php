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

// public route
Route::get('/', 'Home@index')->name('home');
Route::get('/login', function() {
	return view('public.login');
})->name('login');
Route::post('/_login', 'Home@login')->name('_login');
Route::get('/logout', 'Home@userExit')->name('logout');
Route::get('/blog', function() {
	return view('public.blog');
})->name('blog');

// admin route
Route::get('/admin', 'Admin@index')->name('admin');
Route::get('/admin/users', 'Admin@users')->name('users');
Route::get('/admin/contact', 'Admin@contact')->name('contact');
Route::get('/admin/setting', 'Admin@setting')->name('setting');
Route::get('/admin/visitor', 'Visitors@index')->name('visitor');
Route::get('/visitor/delete/{id}', 'Visitors@destroy');
Route::resource('contents', 'Contents');
Route::resource('profile', 'Profile');
Route::resource('testimonial', 'Testimonials');

Route::post('/kontak/store', 'Kontak@store')->name('kontak.store');
Route::get('/kontak/delete/{id}', 'Kontak@destroy');
Route::get('/admin/pricing', 'Pricings@index')->name('pricing');
Route::get('/admin/pricing_store', 'Pricings@create')->name('pricings.create');
Route::post('/admin/pricing_store', 'Pricings@store')->name('pricings.store');
Route::get('/pricing/destroy/{id}', 'Pricings@destroy');
Route::get('/pricing/edit/{id}', 'Pricings@edit');
Route::post('/pricing/update', 'Pricings@update')->name('pricings.update');