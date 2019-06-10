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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/', array('as' => 'home', 'uses' => 'ArtistController@showAllArtists'));
Route::get('/artist/{id}', array('as' => 'artist', 'uses' => 'ArtistController@showOneArtist'));
Route::get('/album/{id}', array('as' => 'album', 'uses' => 'AlbumController@showAllTracksByAlbum'));
Route::get('/track/{id}', array('as' => 'track', 'uses' => 'TrackController@showTrackById'));