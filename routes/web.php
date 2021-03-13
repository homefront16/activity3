<?php
/*
     * Author: Raymond Popsie
 *     Statement of work: This is my work. No one has contributed to this project.  */
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/usersrest', 'UsersRestController');
Route::resource('/clientrest', 'RestClientController');


Route::get('/loggingservice', 'TestLogginController@index');

Route::get('/order', function () {
    return view('order');
});

Route::get('/index', function () {
    return view('index');
});

Route::post('/dataRequest', 'dataTest@transaction');
Route::get('/dataRequest', 'dataTest@index');
