<?php
use Illuminate\Support\Facades\Route;

Route::name('api.')->prefix('api')->group(function (){
    $namespace=implode('\\',['MS','DBServer','Controller','Core']);

  //  dd(implode('//',[$namespace,'Master'])."@test");
    Route::get('/test',implode('\\',[$namespace,'Master'])."@test");

});
