@extends('layouts.homepage')

@section('title', 'Task 1')

@section('content')
  <h1>Contact Us</h1>
  <form method="post" action="{{URL::route('contact')}}">
	@if(isset($error))
	<div class="form-group bg-danger">
		<p>{{$error}}</p>
	</div>
	@endif
    <div class="form-group">
      <label for="exampleFormControlInput1">Name</label>
      <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Message</label>
      <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection