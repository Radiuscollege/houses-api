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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix'=>'api', 'middleware'=>'auth'], function() use ($router) {

    $router->get('profiles',        ['uses' => 'ProfilesController@index']);
    $router->get('profiles/{id}',   ['uses' => 'ProfilesController@show']);
    $router->put('profiles/{id}',   ['uses' => 'ProfilesController@update']);
    $router->post('profiles',       ['uses' => 'ProfilesController@store']);

    $router->get('logs',    ['uses' => 'LogController@index']);
    $router->get('houses', ['uses' => 'HousesController@index']);

});
