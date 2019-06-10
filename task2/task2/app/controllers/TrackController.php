<?php
class TrackController extends BaseController
{
	public function showTrackById($id)
	{
		$track = Track::find($id);
		return View::make('track', array('track' => $track));
	}
}