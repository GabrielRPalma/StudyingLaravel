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

Route::get('/', 'MainController@main')->name('website.index');
Route::get('/about', 'AboutController@about')->name('website.about');
Route::get('/contacts', 'ContactsController@contacts')->name('website.contacts');
Route::get('/login', function(){ return 'Login';})->name('website.login');

Route::prefix('/app')->group(function(){
    Route::get('/clients', function(){ return 'clients';})->name('app.clients');    
    Route::get('/providers', function(){ return 'Providers';})->name('app.providers');
    Route::get('/products', function(){ return 'Products';})->name('app.products');
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