<?php
class AlbumController extends BaseController
{
	public function showAllTracksByAlbum($id)
	{
		$artist = Album::find($id)->artist;
		$tracks = Album::find($id)->track;
		return View::make('album', array('artist' => $artist->Name, 'tracks' => $tracks));
	}
}