<?php
class Track extends Eloquent
{
	protected $table = 'Track';
	protected $primaryKey = 'TrackId';
	public function album()
	{
		return $this->belongsTo('Album', 'AlbumId', 'AlbumId');
	}
	public function genre()
	{
		return $this->hasOne('Genre', 'GenreId', 'GenreId');
	}
}