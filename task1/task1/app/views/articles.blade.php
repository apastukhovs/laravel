@extends('layouts.homepage')

@section('title', 'Task 1')

@section('content')
    <div>
		<p>This is list of articles:</p>
		<ul>
			<li><a href="{{URL::route('article.show', ['article' => 1])}}">The Ultimate Productivity Hack is Saying No</a></li>
			<li><a href="{{URL::route('article.show', ['article' => 2])}}">30 One-Sentence Stories From People Who Have Built Better Habits</a></li>
			<li><a href="{{URL::route('article.show', ['article' => 3])}}">The Ultimate Habit Tracker Guide: Why and How to Track Your Habits</a></li>
			<li><a href="{{URL::route('article.show', ['article' => 4])}}">The Surprising Benefits of Journaling One Sentence Every Day </a></li>
			<li><a href="{{URL::route('article.show', ['article' => 5])}}">How to Make Your Future Habits Easy</a></li>
			<li><a href="{{URL::route('article.show', ['article' => 6])}}">Introducing Atomic Habits</a></li>
			<li><a href="{{URL::route('article.show', ['article' => 7])}}">The Paradox of Behavior Change</a></li>
		</ul>
	</div>
@endsection