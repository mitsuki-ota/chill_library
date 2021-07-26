<?php

Auth::routes();

Route::get('/', function (){
    return view ('top');
});

Route::get('/search', function (){
    return view ('search');
});
