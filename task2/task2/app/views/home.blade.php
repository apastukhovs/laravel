@extends('layouts.main')

@section('title', 'Task 2')

@section('content')
	<h1>List of Artists.</h1>
	<ul>
		<?php foreach($artists as $artist) : ?>
			<li><a href="{{ URL::route('artist', $artist->ArtistId) }}">{{ $artist->Name }}</a></li>
		<?php endforeach; ?>
	</ul>
@endsection