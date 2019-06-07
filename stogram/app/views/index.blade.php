@extends('layout')

@section('content')
<!--
@if($errors)
@foreach($errors->all() as $error)
{{$error}}
@endforeach
@endif
-->
<form method="post" action="{{action('HomeController@postImage')}}" enctype="multipart/form-data">
<label>Name: <input type="text" name="name"></label><br>
@if($errors->first('name'))
{{$errors->first('name')}}
@endif
<label>Image: <input type="file" name="image"></label><br>
@if($errors->first('image'))
{{$errors->first('image')}}
@endif
<label>Description: <textarea name="description"></textarea></label><br>
<button type="submit">Upload</button>
</form>
@stop