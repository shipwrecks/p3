@extends('_master')

@section('title')
	User Generator
@stop

@section('content')
<h2>User Generator</h2>
<p><a href='/'>... Home</a></p>

<p>How many users do you want?  Also check off if you want additional user
information.</p>

<p><strong>Users:</strong> {{ Form::text('numUsers'); }} (Max is 99)</p>
<p>{{ Form::checkbox('birthdate', 'birthdate'); }} Include birthdate?</p>
<p>{{ Form::checkbox('profile', 'profile'); }} Include profile?</p>


{{Form::submit('Generate!', array('class' => 'button'));}}
 
 <p><a href='/'>Click here to go back</a></p>

@stop