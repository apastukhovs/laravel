@extends('layouts.main')

@section('title', 'Task 2')

@section('content')
	<h1>Artist name: {{ $artist }}</h1>
	<?php foreach($albums as $album) : ?>
		<p>Album name: <a href="{{ URL::route('album', $album->AlbumId) }}">{{ $album->Title }}</a></p>
	<?php endforeach; ?>
@endsection