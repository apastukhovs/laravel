<?php
class ArtistController extends BaseController
{ 
	public function showAllArtists()
	{
		$artists = Artist::all();
		return View::make('home', array('artists' => $artists));
	}
	public function showOneArtist($id)
	{
		$artist = Artist::find($id);
		$listAlbums = Artist::find($id)->album;
		return View::make('artist', array('artist' => $artist->Name, 'albums' => $listAlbums));
	}
}