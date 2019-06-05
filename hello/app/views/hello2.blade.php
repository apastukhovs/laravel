@extends('layout')

@section('content')
@if($name)
<h1>Hello2, {{ $name}} !</h1>
@endif
<form method="post">
<input type="text" name="name" />
<button type="submit">Sent</button>
</form>
@stop

@section('footer')
@parent
Email:test@mail.com
@if($urls)
<ul>
@foreach($urls as $title=>$url)
<li><a href="{{$url}}">{{$title}}</li>
@endforeach
</ul>
@endif
@stop
