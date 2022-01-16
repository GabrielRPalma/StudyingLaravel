<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@main');

Route::get('/about', 'AboutController@about');

Route::get('/contacts', 'ContactsController@contacts');

/*
Receiving parameters from a form in the contacts web page

Route::get('/contacts/{name}/{details}/{category_id}', function(
    string $name, 
    string $details,
    int $category_id){

    echo "My name is: $name | My details are: $details | My category number is $category_id";
});

*/
/*
Receiving information using optional parameters in laravel
Route::get('/contacts/{name}/{details?}', function(
    string $name, 
    string $details = 'Details not informed'){
    echo "The contact name is: $name | The details of the contact are: $details";
});
*/

Route::get('/contacts/{name}/{category_id}', function($name, $category_id){
    echo "The name of the contact is: $name | The category id is: $category_id";
})->where('name', '[A-Za-z]+')->where('category_id', '[0-9]+');
