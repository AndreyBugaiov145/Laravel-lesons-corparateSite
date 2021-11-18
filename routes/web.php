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

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/


Route::resource('/','IndexController',['only'=>['index'],'names'=>['index'=>'home']]);

Route::resource('portfolios','PortfoliosController',[
    'parameters'=>[
        'portfolios'=>'alias'
    ],
]);

Route::get('articles/cat/{cat_alias?}','ArticlesController@index')->name('articlesCat')->where('cat_alias','[\w]+');

Route::resource('articles','ArticlesController',[
    'parameters'=>[
        'articles'=>'alias'
    ],
]);

Route::resource('comment','CommentController',[
    'only'=>['store'],
]);

Route::match(['get','post'],'/contacts',['uses'=>'ContactsController@index','as'=>'contacts']);