<?php

use Illuminate\Support\Facades\Route;
use resources\views\auth;
use App\Http\Controllers\moduleController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth as FacadesAuth;

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
    return view('landing');
})->name('landing');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/chat',function(){
    return view('chat');
    })->name('chat');

	Route::get('/chat2',function(){
		return view('chat2');
		});

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/soporte', function () {
    return view('soporte');
})->name('soporte');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/workshop', function () {
    return view('workshop');
})->name('workshop');

require __DIR__.'/auth.php';

Route::get('auth/user', function () {

	if(auth()->check()){

		return response()->json([
			'authUser' => auth()->user()
		]);

		return null;

	}

});



Route::get('chat/{chat}', 'App\Http\Controllers\ChatController@show')->name('chat.show');

Route::get('chat/with/{user}', 'App\Http\Controllers\ChatController@chat_with')->name('chat.with');

Route::get('chat/{chat}/get_users', 'App\Http\Controllers\ChatController@get_users')->name('chat.get_users');

Route::get('chat/{chat}/get_messages', 'App\Http\Controllers\ChatController@get_messages')->name('chat.get_messages');

Route::post('message/sent', '\App\Http\Controllers\MessageController@sent')->name('message.sent');

Route::resource('modules', moduleController::class);

