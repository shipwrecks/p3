@extends('_master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('content')
<h2>Lorem Ipsum Generator</h2>
<p><a href='/'>... Home</a></p>

<p>How many paragraphs do you want?</p>

<p>{{ Form::open(array('url' => '/lorem-ipsumdone', 'method' =>'POST')); }}
	{{ Form::label('numPara', '# Paragraphs') }}
	{{ Form::text('numPara', null, array('maxlength' => '2')) }}
	(Max is 99)</p>

	{{Form::submit('Generate!');}}
	{{ Form::close() }}

@stop