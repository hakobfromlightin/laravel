<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Events\UserWasBanned;

Route::get('foo', 'FooController@foo');

Route::get('/', function () {

//    dd(Hash::make('password'));
//    dd(bcrypt('password'));
    dd(app('hash')->make('password'));
//    dd(app()['hash']->make('password'));
//    dd(app('Illuminate\Hashing\BcryptHasher')->make('password'));
//    dd(app('Illuminate\Contracts\Hashing\Hasher')->make('password'));

    /**
     * Dump Config Contracts.
     */
//    dd(Config::get('database.default'));
//    dd(app('Illuminate\Config\Repository')['database']['default']);
//    dd(app('Illuminate\Contracts\Config\Repository')['database']['default']);
//    dd(app('config')['database']['default']);
//    dd(app()['config']['database']['default']);

    /**
     * Fire an event
     */
//    $user = new App\User;
//    event(new UserWasBanned($user));


    return view('welcome');
});

Route::get('contact', 'PagesController@contact');
Route::get('about', 'PagesController@about');

Route::resource('articles', 'ArticlesController');

Route::get('tags/{tags}', 'TagsController@show');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

get('config', 'ContractsTestController@config');