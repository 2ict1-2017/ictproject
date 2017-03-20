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

$app->get('/', function () use ($app) {
    return "Restfull app lumen by Hakan Sanli";
});
$app->group(['prefix' => 'api/v1'], function($app)
{
    $app->get('beacon','BeaconsController@index');
    $app->get('beacon/id/{id}','BeaconsController@byId');
});