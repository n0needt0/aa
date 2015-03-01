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

Route::group(array('domain' => 'aaps.this.com'), function()
{
    Route::get('tools', 'ToolsController@showTest');
    Route::get('tools/ort', 'ToolsController@showOrt');
    Route::post('tools/ort', 'ToolsController@setOrt');
    Route::get('tools/cageaid', 'ToolsController@showCageaid');
    Route::post('tools/cageaid', 'ToolsController@setCageaid');
    Route::get('tools/phq9', 'ToolsController@showPhq9');
    Route::post('tools/phq9', 'ToolsController@setPhq9');
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
