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

/*
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
*/

//$route->version('v1',[],function($router){});
//$router->group(['middleware' => ['auth']], function () use ($router) {
//$router->group(['prefix' => 'api/v1', 'namespace' => 'App\Http\Controllers'], function () use ($router) {
$router->group(['prefix' => 'api/v1'], function ($id=null) use ($router) {

	$router->get('categoryList', ['as' => 'categoryList', 'uses' => 'CategoryController@getList']);
	$router->get('category[/{id}]', ['as' => 'category', 'uses' => 'CategoryController@get']);

	$router->get('mall[/{id}]', ['as' => 'mall', 'uses' => 'MallController@get']);
	$router->get('mallList', ['as' => 'mallList', 'uses' => 'MallController@getList']);

	$router->get('product[/{productId}]', ['as' => 'product', 'uses' => 'ProductController@get']);
	$router->get('productList[/{categoryId}]', ['as' => 'productList', 'uses' => 'ProductController@getList']);
	$router->get('productList/{mallId}/{categoryId}/{productId}/', ['as' => 'productList', 'uses' => 'ProductController@getCustomList']);
	

	//$router->get('product', ['as' => 'product', 'uses' => 'ProductController@index']);
	//$router->post('product', ['as' => 'product', 'uses' => 'ProductController@post']);
});

$router->group(['middleware' => ['auth']], function () use ($router) {
	//$router->get('mallList', ['as' => 'mallList', 'uses' => 'MallController@getList']);
	//$router->get('mall[/{id}]', ['as' => 'mall', 'uses' => 'MallController@get']);
});