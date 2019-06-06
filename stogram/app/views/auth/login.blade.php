@extends('layout')

@section('content')
<h1>Login</h1>
<form method="post">
<label>Email <input type="text" name="email"></label><br>
<label>Password <input type="password" name="password"></label><br>
<button type="submit">Login Up</button>
</form>

@stop