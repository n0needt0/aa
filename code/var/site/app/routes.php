<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('domain' => 'aa.this.com'), function()
{
    Route::get('tools/ort', array('as' => 'ort', 'uses' => 'ToolsController@showOrt'));
    Route::get('tools/cageaid', array('as' => 'cageaid', 'uses' => 'ToolsController@showCageaid'));
    Route::get('tools/phq9', array('as' => 'phq9', 'uses' => 'ToolsController@showPhq9'));
});
/*
Route::group(array('domain' => 'base.this.com'), function()
{

    Route::get('/', 'HomeController@showWelcome');

    Route::controller('users', 'UserController');

    Route::controller('verify', 'VerifyController');

    Route::resource('groups', 'GroupController');

    Route::controller('emd', 'EmdController');

});

Route::group(array('domain' => 'wb.this.com'), function()
{
    Route::get('/', 'WbController@getPage');
    Route::get('/wb/{page?}', 'WbController@getPage');
});

**/
