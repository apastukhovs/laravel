@extends('layouts.homepage')

@section('title', 'Task 1')

@section('content')
    <div>
		<p>This is my body content.</p>
		<ul>
			<li><a href="{{URL::route('articles')}}">Our Articles</a></li>
			<li><a href="{{URL::route('about')}}">About</a></li>
			<li><a href="{{URL::route('contact')}}">Contact Us</a></li>
		</ul>
	</div>
@endsection