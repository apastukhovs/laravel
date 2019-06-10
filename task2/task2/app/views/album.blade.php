@extends('layouts.main')

@section('title', 'Task 2')

@section('content')
	<h1>Artist name: {{ $artist }}</h1>
	<?php foreach($tracks as $track) : ?>
		<p>Track name: <a href="{{ URL::route('track', $track->TrackId) }}">{{ $track->Name }}</a></p>
	<?php endforeach; ?>
@endsection