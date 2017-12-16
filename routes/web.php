<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->post('/users/login',['uses'=>'UsersController@getToken']);

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/key', function() use ($router){
	//return str_random(length:32);
	return str_random(32);
});


$router->get('hello', function () {
    return 'Hello World';
});

$router->get('/user[/{id}]', function ($id=null) {
    return 'User '.$id;
});


//$router->group(['middleware' => ['auth']], function () use ($router) {
//$router->group(['prefix' => 'api/v1', 'namespace' => 'App\Http\Controllers'], function () use ($router) {
$router->group(['prefix' => 'api/v1'], function () use ($router) {

	$router->get('product', ['as' => 'product', 'uses' => 'ProductController@index']);
	$router->post('product', ['as' => 'product', 'uses' => 'ProductController@post']);
});