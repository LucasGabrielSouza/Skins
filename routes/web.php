<?php
use GuzzleHttp\Client;



Route::get('/', function () {
 
$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://newsapi.org/v2/top-headlines?sources=google-news-br&apiKey=8c2683da970f4b62a8a800fc22c6e77c',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);

$response = $client->request('GET', 'test');

return view('welcome');
});

Route::get('/home', 'HomeController@Index');
Route::get('/news', 'NewsController@newsIndex');


Route::get('inventory', 'InventoryController@index');
    

Route::get('auth/steam', 'AuthController@redirectToSteam')->name('auth.steam');
Route::get('auth/steam/handle', 'AuthController@handle')->name('auth.steam.handle')->name('logout');

