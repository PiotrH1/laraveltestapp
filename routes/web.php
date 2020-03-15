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


//Default Laravel route is here:
// Route::get('/', function () {
//     return view ("welcome") ;
// });


//My custom routes are here:

// Route::get('/hello', function () {
//     return "<h2>
//     hello world
//     </h2>" ;
// });

// Route::get('/user/{id}/{name}', function ($id,$name){
//  return "<h2>Here is user : <br> {$name }<br> and has an id  {$id} </h2>";
// });
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
//php artisan routes:list
Route::resource('post', 'PostsController');
