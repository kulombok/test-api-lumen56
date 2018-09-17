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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->get('/', function () use ($router) {
  $res['success'] = true;
  $res['result'] = "Hello there welcome to web api using lumen tutorial!";
  return response($res);
});
$router->post('/login', 'LoginsController@index');
$router->post('/register', 'UsersController@register');
$router->get('/user/{id}', ['middleware' => 'auth', 'uses' =>  'UsersController@get_user']);

/**
 * Routes for resource personal
 */
$router->get('personal', 'PersonalsController@index');
$router->get('personal/{id}', 'PersonalsController@read');
$router->post('personal', 'PersonalsController@create');
$router->put('personal/{id}', 'PersonalsController@update');
$router->delete('personal/{id}', 'PersonalsController@delete');

/**
 * Routes for resource relation
 */
$router->get('relation', 'RelationsController@all');
$router->get('relation/{id}', 'RelationsController@get');
$router->post('relation', 'RelationsController@add');
$router->put('relation/{id}', 'RelationsController@put');
$router->delete('relation/{id}', 'RelationsController@remove');
