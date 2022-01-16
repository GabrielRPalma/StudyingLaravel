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

Route::get('/login', function(){
    return 'Login';
});

Route::prefix('/app')->group(function(){
    
    Route::get('/clients', function(){
        return 'clients';
    });
    
    Route::get('/providers', function(){
        return 'Providers';
    });
    
    Route::get('/products', function(){
        return 'Products';
    });
    
});

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

/*
Receiving parameters and checking it with regular expressions

Route::get('/contacts/{name}/{category_id}', function($name, $category_id){
    echo "The name of the contact is: $name | The category id is: $category_id";
})->where('name', '[A-Za-z]+')->where('category_id', '[0-9]+');

*/