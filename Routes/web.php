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

// Route::prefix('feedback')->group(function() {
//     Route::get('/', 'FeedbackController@index');
// });

//MEMBER
Route::group(['prefix' => 'member', 'middleware' => ['auth:web']], function(){

  Route::get('/feedback', function () {
      return view('feedback::feedback.member.feedback');
  })->name('member.feedback');
});
