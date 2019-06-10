<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function() {
	return Redirect::route('home');
});
Route::get('/home', array('as' => 'home', 'uses' => 'HomeController@showWelcome'));
Route::get('/article/{id}', array('as' => 'article.show',  function($id) {
	return "Article $id";
}));
Route::get('/articles', array('as' => 'articles', 'uses' => 'ArticlesController@showArticles'));
Route::get('/about', array('as' => 'about', 'uses' => 'AboutController@showAbout'));
Route::get('/contact-us', array('as' => 'contact', 'uses' => 'ContactController@showContactForm'));
Route::post('/contact-us', 'ContactController@sendMessage');
Route::get('/thank-you', array('as' => 'thanks', 'uses' => 'ContactController@showMessage'));
