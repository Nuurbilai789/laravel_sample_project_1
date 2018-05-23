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
    return view('welcome'
    );
});

Route::get('about', function(){
	$name = 'deepika padukune';
	$tor_khams = [
		'chole ashba',
		'amake khushi korba',
		'khusi hole $ niye chole jaba'
	];
	return view('about', compact(
	'name','tor_khams'));
});
