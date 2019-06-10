@extends('layouts.main')

@section('title', 'Task 2')

@section('content')
	<h1>Artist name: {{$track->album->artist->Name}}</h1>
	<h2>Album name: {{$track->album->Title}}</h2>
	<p>Track name: {{$track->Name}}</p>
	<p>Genre: {{$track->genre->Name}}</p>
	<p>Composer: {{$track->Composer}}</p>
	<p>Milliseconds: {{$track->Milliseconds}}</p>
	<p>Bytes: {{$track->Bytes}}</p>
	<p>Price: {{$track->UnitPrice}}</p>
@endsection