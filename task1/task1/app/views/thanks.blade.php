@extends('layouts.homepage')

@section('title', 'Task 1')

@section('content')
	<p>Thanks {{Session::get('name')}} for message.</p>
@endsection