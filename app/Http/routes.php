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

Route::get('foo', 'FooController@foo');

Route::get('/', function () {
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

Route::post('search-results', function () {
    return sprintf('Search results for "%s"', Request::input('search'));
});

Route::get('posts', function () {
    return view('posts/posts')->with('posts', App\Post::all());
});

Route::get('admin', ['middleware' => 'admin:Jake', function () {
    return 'Hello Jake';
}]);

Route::group(['prefix' => 'admin', 'as' => 'Admin::'], function () {
    Rout::get('home', ['as' => 'home', function () {
        return 'some view';
    }]);
});