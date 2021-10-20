<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\ExampleController;
use App\Models\Bundle;
use App\Models\Data;
use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

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

$router->get('api/bundle', function () use ($router) {
    $bundle = Bundle::all();
    return Response::json(array(
        'success'   => true,
        'message'   => 'Data Bundle',
        'data'      => json_decode($bundle)
    ));
});

$router->get('api/user={id}', function ($id) use ($router) {
    $user = User::where('id', $id)->first();
    $user->idBundle = $user->bundle->name;
    if (isset($user)) {
        return Response::json(array(
            'success'   => true,
            'message'   => 'Data User',
            'data'      => json_decode($user)
        ));
    } else {
        return Response::json(array(
            'success'   => false,
            'message'   => 'Data User Tidak Ada'
        ));
    }
});

$router->get('api/data={id}', function ($id) use ($router) {
    $data = Data::where('idUser', $id)->get();
    if (isset($data)) {
        return Response::json(array(
            'success'   => true,
            'message'   => 'Data Main',
            'data'      => json_decode($data)
        ));
    } else {
        return Response::json(array(
            'success'   => false,
            'message'   => 'Data Main'
        ), 404);
    }
});
