<?php

use Dingo\Api\Routing\Router;

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

/*$app->get('/', function () use ($app) {
    return $app->version();
});*/
$app->get('/', 'Controller@hello');

/*$api = app(Router::class);

$api->version('v1', function ($api) {
    $api->get('hello', 'App\Http\Controllers\Controller@hello');
});*/