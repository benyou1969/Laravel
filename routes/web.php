<?php
//All Information About Routing visit this link {https://laravel.com/docs/5.6/routing}
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

Route::get('/home', function () {
     return view('welcome');
    // return ('<h2 style="text-align:center">Welcome</h2>');
});
Route::get('/','PagesController@index');
Route::get('/services','PagesController@services');
// Available Router Methods
/*
Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);
*/
//Basic Routing
Route::get('foo', function () {
    return 'Hello World';
});
Route::any('foo', function () {
  return 'Hello World';
});
Route::view('/about', 'about');
// Required Parameters
Route::get('/users/{id}', function ($id) {
    return 'This Is user '. $id;
});
// Required Parameters
Route::get('user/{name?}',function($name){
  return 'My name is : ' .$name;
});
// Regular Expression Constraints
Route::get('user-id/{id}', function ($id) {
    return 'user id: ' . $id ;
})->where('id', '[0-9]+');
Route::get('user-name/{name}', function ($name) {
    return 'user name  is : '. $name;
})->where('name', '[A-Za-z]+');
Route::get('user/{id}/{name}',function($id,$name){
  return 'username is: ' . $name . ', and id : ' . $id;
})->where(['id'=> '[0-9]+','name'=>'[a-z]+']);
// Global Constraints
// Named Routes
// Route::get('user/profile', 'UserController@showProfile')->name('profile');
Route::resource('posts','PostsController');
