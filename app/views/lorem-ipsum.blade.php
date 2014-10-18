@extends('_master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('content')
<h2>Lorem Ipsum Generator</h2>
<p><a href='/'>... Home</a></p>

<p>How many paragraphs do you want?</p>
<p><strong>Paragraphs:</strong> 
	{{ Form::open(array('url' => '/lorem-ipsumdone.php')) }}
	{{ Form::text('numPara', null, array('maxlength' => '2')) }}
	(Max is 99)</p>

	{{Form::submit('Generate!', array('class' => 'button'));}}
	{{ Form::close() }}


 
@stop