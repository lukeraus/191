<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// For Login
Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

// Facebook
Route::get('/fbPageLikeCount', 'FacebookController@getPageLikeCount');
Route::get('/fbGetFeedDateRange', 'FacebookController@getFeedDateRange');

// Twitter
Route::get('/twGetLastTweet', 'TwitterController@getLastTweet');
Route::get('/twGetLastRetweetCount', 'TwitterController@getLastRetweetCount');
Route::get('/twGetFollowersCount', 'TwitterController@getFollowersCount');
Route::get('/twGetFollowersData', 'TwitterController@getFollowersData');
Route::get('/twGetTweets', 'TwitterController@getTweets');

// Instagram
Route::get('/inGetNumberOfFollowers', 'InstagramController@getNumberOfFollowers');
Route::get('/inGetRecentPosts', 'InstagramController@getRecentPosts');

// Update user
Route::post('updateUserGeneral', 'UserController@updateGeneralSettings');
Route::post('updateSocialSettings', 'UserController@updateSocialSettings');
Route::post('updateAPISettings', 'UserController@updateAPISettings');


// Page Routes
Route::get('/dashboard', function() {
  return View('dashboard');
})->middleware('auth');

Route::get('/settings', function() {
	return View('settings');
})->middleware('auth');

Route::get('/facebook', function() {
  return View('facebook');
})->middleware('auth');

Route::get('/instagram', function() {
  return View('instagram');
})->middleware('auth');

Route::get('/twitter', function() {
  return View('twitter');
})->middleware('auth');
