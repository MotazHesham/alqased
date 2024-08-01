<?php

use Illuminate\Support\Facades\Route;


Route::group(['as' => 'frontend.', 'namespace' => 'Frontend'], function () {

    Route::get('/', 'HomeController@index')->name('home');
    
    Route::get('projects', 'HomeController@projects')->name('projects');
    Route::get('projects/{id}', 'HomeController@project')->name('projects.show');
    
    Route::get('products/{type}', 'HomeController@products')->name('products');
    Route::get('product/{id}', 'HomeController@product')->name('products.show');
    
    Route::get('contactus', 'HomeController@contactus')->name('contactus');
    Route::post('contactus', 'HomeController@contactus_store')->name('contactus.store');
    
    Route::get('partners', 'HomeController@partners')->name('partners'); 
    Route::get('certificates', 'HomeController@certificates')->name('certificates'); 
    Route::get('about', 'HomeController@about')->name('about'); 
});
