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
	return View::make('home');
	//return View::make('test');
});

Route::get('buildings', function()
{
    $buildings = buildings::all();
    $populations = populations::all();
    return View::make('buildings')->with('buildings', $buildings)->with('populations', $populations);
});

Route::get('test', function()
{
	return View::make('test');
});

Route::get('test2', function()
{
	return View::make('test2');
});

