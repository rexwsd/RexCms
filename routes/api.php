<?php

$api = app('Dingo\Api\Routing\Router');
/**
 * |--------------------------------------------------------------------------
 * | API Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register API routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | is assigned the "api" middleware group. Enjoy building your API!
 * |
 **/

$api->version('v1', ['namespace' => 'App\Http\Controllers'], function ($router) {
    /**@var $router \Dingo\Api\Routing\Router* */

    $router->post('auth/login', 'Api\AuthController@login');
    $router->post('auth/register', 'Api\AuthController@register');
    /**********Auth 模块 开始************/
    $router->group(['middleware' => 'auth.jwt'], function ($router) {
        /**@var $router \Dingo\Api\Routing\Router* */
        $router->post('auth/logout', 'Api\AuthController@logout');
        $router->get('auth/info', 'Api\AuthController@getAuthUser');
    });
    /**********Auth 模块 结束************/
});
