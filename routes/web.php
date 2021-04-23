<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['prefix' => 'v1'], function () use ($router) {

    $router->get('/', function () use ($router) {
        echo env('DB_HOST')."<br>";
        echo env("DB_DATABASE")."<br>";
        echo env("DB_USERNAME")."<br>";
        echo env("DB_PASSWORD")."<br>";
        return $router->app->version();
    });

    $router->group(['prefix' => 'auth'], function () use ($router) {
        $router->post('/signin', "AuthController@signin");
        $router->post('/signup', "AuthController@signup");
    });


    $router->group(['prefix' => 'player'], function () use ($router) {

        $router->group(['middleware' => 'auth'], function () use ($router) {
            $router->get('/match', "MatchController@index");

            $router->post('/match/{match}', "BetController@store");

            $router->get('/classification', "ClassificationController@index");
        });
    });
});
