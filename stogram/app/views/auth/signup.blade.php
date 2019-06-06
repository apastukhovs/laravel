@extends('layout')

@section('content')
<h1>Sign Up</h1>
<form method="post">
<label>Name <input type="text" name="name"></label><br>
<label>Email <input type="text" name="email"></label><br>
<label>Password <input type="password" name="password"></label><br>
<label>Confirm Password <input type="password" name="password_confirmation"></label><br>
<button type="submit">Send</button>
</form>

@stop