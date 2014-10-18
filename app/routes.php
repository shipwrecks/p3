<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

//display the lorem ipsum page
Route::get('/lorem-ipsum', function()
{
	return View::make('lorem-ipsum');
});

//process the lorem ipsum page
Route::post('/lorem-ipsumdone', function()
{
	$numPara = Input::get('numPara');
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($numPara);
	$lorem = implode('<p>', $paragraphs);
	return View::make('lorem-ipsumdone')->with('lorem', $lorem);
});

//display the user generator page
Route::get('/user-gen', function()
{
	return View::make('user-gen');
});

//process the user generator page
Route::post('/user-gendone', function()
{
	$numUsers = Input::get('numUsers');
	$address = Input::get('address');
	$profile = Input::get('profile');
	$faker = Faker\Factory::create();
	return View::make('user-gendone')->with('faker', $faker)
	->with('numUsers', $numUsers)
	->with('address', $address)
	->with('profile', $profile);
});

//below is just a random page where I was constantly testing code
Route::get('/test', function()
{
	$numPara = 3;
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($numPara);
	$result = implode('<p>', $paragraphs);
	return View::make('test')->with('result', $result);
});