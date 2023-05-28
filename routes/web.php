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
use App\User;

Route::get('config-cache',function(){
    Artisan::call('config:cache');
    Artisan::call('view:clear');
});


Route::group(['middleware'=>'web'],function(){
    Auth::routes();
});

Route::group(['middleware'=>'auth','prefix'=>'management'],function(){
   
});
Route::get('/',function(){return redirect()->route('dashboard.index'); });
Route::name('dashboard.index')->get('dashboard', 'HomeController@index');
Route::name('password.edit')->get('password/change', 'Admin\UserController@getPasswordReset');
Route::name('password.update')->post('password/change', 'Admin\UserController@postPasswordReset');
Route::name('user.profile')->get('/profile', 'Admin\UserController@profile');
Route::name('post1')->get('/post1', 'postController@index1');
Route::name('student')->get('/student', 'postController@index2');

//Route::name('post.index')->get('/post', 'postController@index');
Route::get('/',function(){
    return view('welcome');
});

// //Route::resource('player','PlayerController');
Route::resource('post','postController');
Route::resource('tiebreak','TieBreakController');
Route::resource('tournamenttype','TournamenttypeController');
Route::resource('student1','StudentController');

Route::resource('player','PlayerController');
//Route ::resource('student','StudentController');
Route::get('pair','PlayerController@pairing');

Route ::resource('tournament','TournamentController');

Route ::resource('score','ScoreController');
Route::post('clearRound','RoundController@clearRound');

Route::post('clearScore','ScoreController@clearScore');

Route::post('clearRoundResult','RoundresultController@clearRoundResult');

Route ::resource('round','RoundController');
Route ::resource('roundresult','RoundresultController');


