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
use App\esho;
Route::get('/', function () {
    return view('welcome'
    );
});

Route::get('about', function(){
	$esho = 
	$tumra_jara_chole_ashar_kotha = DB::table('users')->get();
	return $tumra_jara_chole_ashar_kotha;
	// return view('about', compact(
	// 'name','tor_khams'));
});

// Route::get('eshos/{esho}', function($id){
// 	$esho = App\esho::find($id);
	
// 	return view('eshos.show', compact('esho'));

// });
