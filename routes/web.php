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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::prefix('engineering-projects')->group(function () {
	Route::get('encrypted-chat-in-python', function() {
	    return view('engineering-projects.encrypted1');
	});
	Route::get('college-enquiry-chatbot', function() {
	    return view('engineering-projects.collegeenquirychatbot');
	});
});
