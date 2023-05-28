<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/listaservice', function () {
    return view('listaservice');
});
Route::get('/request', function () {
    return view('request');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/signinpage', function () {
    return view('signinpage');
});
Route::get('/soundtrack', function () {
    return view('soundtrack');
});
Route::get('/adddetails', function () {
    return view('adddetails');
})->middleware('auth');

Route::get('/signup', function () {
    return view('signup');
});




Route::get('/myprofile', function () {
    return view('myprofile');
});

Route::get('/updateform/{id}', function ($id) {
    $user = App\Models\User::find($id);
    return view('updateform', compact('user'));
});


Route::get('/updateDetail/{id}','App\Http\Controllers\RequestController@showCurrentRequest');


// Route::get('/updaterequestform/{id}', function ($id) {
//     $detail = App\Models\details::find($id);
//     return view('updaterequestform', compact('detail'));
// });

Route::post('/updateDetail/{id}', 'App\Http\Controllers\RequestController@updateRequest');


Route::post('/adddetails', 'App\Http\Controllers\RequestController@addRequest');
Route::get('/userprofile', 'App\Http\Controllers\UserController@viewUsers');
Route::post('/signup', 'App\Http\Controllers\UserController@storeuser');
Route::post('/updateUser/{id}', 'App\Http\Controllers\UserController@updateUser');
// Route::post('/updateDetail/{id}', 'App\Http\Controllers\RequestController@updateDetail');
// Route::get('/deleteUser/{id}', 'App\Http\Controllers\UserController@deleteUser');
Route::get('/deleteUser/{user}', 'App\Http\Controllers\UserController@deleteUser', ['user' => '{user}']);
// Route::get('/userprofile', 'App\Http\Controllers\UserController@user');
Route::get('userprofile/{user}', 'App\Http\Controllers\UserController@user', ['user' => '{user}']);
// Route::get('/userprofile/{user}', 'App\Http\Controllers\UserController@user');
// Route::post('/Signin','App\Http\Controllers\SessionsController@Signin')->auth('guest');
// Route::get('/admin/users/{user}', 'App\Http\Controllers\AdminController@user', ['user' => '{user}']);
Route::get('/admin/users/{user}', 'App\Http\Controllers\AdminController@user', ['user' => '{user}']);
Route::post('/admin/users/{user}', 'App\Http\Controllers\AdminController@updateUser', ['user' => '{user}']);

Route::get('/deleteRequest/{id}', 'App\Http\Controllers\RequestController@deleteRequest', ['id' => '{id}']);

Route::post('/logout','App\Http\Controllers\SessionsController@logout');
Route::post('/login', 'App\Http\Controllers\SessionsController@Signin')->name('login');
Route::get('/myprofile', 'App\Http\Controllers\RequestController@viewDetails');











// <button class="btn"><a href="/myprofile" style="color: white; text-decoration:none;"> Username: {{auth()->user()->email}}</a></button>
















// Route::get('/registration/incometax', function () {
//     return view('registration/incometax');
// })->middleware('auth');
// Route::post('/registration/incometax', 'App\Http\Controllers\ITRegs@register')->middleware('auth');
// Route::post('/registration/incometax', 'App\Http\Controllers\ITRegs@noaccess')->middleware('guest');
// Route::get('/profile/{profile}', function ($slug) {
//     $profile = file_get_contents(__DIR__."/../resources/views/profile/{$slug}");
// });
// Route::get('/registration/signup', function () {
//     return view('registration/signup');
// })->middleware('guest');
// Route::post('/registration/signup', 'App\Http\Controllers\UserController@register')->middleware('guest');
// Route::post('/logout','App\Http\Controllers\SessionsController@logout');
// Route::get('/login', function () {
//     return view('login');
// })->middleware('guest');
// Route::post('/login','App\Http\Controllers\SessionsController@login')->middleware('guest');

// // Admin Routes
// Route::get('/admin', 'App\Http\Controllers\AdminController@index');
// Route::get('/admin/users', 'App\Http\Controllers\AdminController@users');
// Route::get('/admin/users/{user}', 'App\Http\Controllers\AdminController@user', ['user' => '{user}']);
// Route::post('/admin/users/{user}', 'App\Http\Controllers\AdminController@updateUser', ['user' => '{user}']);
// Route::get('/admin/delete/{user}', 'App\Http\Controllers\AdminController@deleteUser', ['user' => '{user}']);
// Route::get('/admin/login', function (){
//     return view('/admin/login');
// });
// Route::post('/admin/login', 'App\Http\Controllers\AdminController@admin_login');