@extends('_master')

@section('title')
	User Generator
@stop

@section('head')

@stop

@section('content')
<h2>User Generator</h2>
<p><a href='/'>... Home</a></p>
<p><a href='/user-gen'>... Previous Page</a></p>

@for ($i = 0; $i < $numUsers; $i++)
	<strong>{{ $faker->name }};</strong><br>
	@if ($address == true)
	{{ $faker->address }};<br>
	@endif 
	@if ($profile == true)
	{{ $faker->text }};<br>
	@endif
	<p></p>
@endfor

 
@stop