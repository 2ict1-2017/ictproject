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
    return $app->version();
});

$app->group(['prefix' => 'api/v1/beacons'], function () use ($app) {
    
    // geeft een lijst met alle beacons (id, location, description)
    $app->get('/','BeaconsController@index');

    // geeft de informatie van de aangegeven beacon (location, description)
    $app->get('/{beaconId}','BeaconsController@getBeacon');

    // geeft een lijst met de beschikbare statische gegevens voor de aangegeven beacon (id, meta-type, presentationNumber)
    $app->get('/{beaconId}/staticdata','BeaconsController@getStaticData');

    // geeft de gevraagde data terug {meta-type, content}
    $app->get('/{beaconId}/staticdata/{dataId}','BeaconsController@getData');

    // geeft een lijst met de beschikbare route gegevens voor de gespecifieerde beacon (id, meta-type, presentationNumber)
    $app->get('/{beaconId}/route/{routeId}','BeaconsController@getRoute');

    // geeft de gevraagde data terug {meta-type, content}
    $app->get('/{beaconId}/route/{routeId}/routedata/{dataId}','BeaconsController@getRouteData');
    
});