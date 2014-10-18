@extends('_master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('content')
<h2>Lorem Ipsum Generator</h2>

<p>How many paragraphs do you want?</p>
<p><strong>Paragraphs:</strong> {{ Form::text('amount'); }} (Max is 99)</p>

{{Form::submit('Generate!', array('class' => 'button'));}}

<p><a href='/'>Click here to go back</a></p>
 
@stop