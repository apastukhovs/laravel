@extends('layout')

@section('content')
<form action="submit" method="post">
<input type="text" name="name" />
<button type="submit">Sent</button>
</form>
@stop