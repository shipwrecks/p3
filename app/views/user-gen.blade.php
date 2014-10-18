@extends('_master')

@section('title')
	User Generator
@stop

@section('head')

@stop

@section('content')
<h2>User Generator</h2>
<p><a href='/'>... Home</a></p>

<p>How many users do you want?  Also check off if you want additional user
information.</p>

<p>{{ Form::open(array('url' => '/user-gendone', 'method' =>'POST')); }}
	{{ Form::label('users', '# Users') }}
	{{ Form::text('numUsers', null, array('maxlength' => '2')) }}
	(Max is 99)</p>
	<p>{{ Form::checkbox('address', 'address'); }} Include address?</p>
	<p>{{ Form::checkbox('profile', 'profile'); }} Include profile?</p>

	{{Form::submit('Generate!');}}
	{{ Form::close() }}

@stop