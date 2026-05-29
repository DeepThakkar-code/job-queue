<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('email-test', function () {

    $details['email'] = 'deepthakkar356@gmail.com';

    dispatch(new App\Jobs\SendEmailJob($details));

    dd('done');
});

Route::get('/hello', function () {
    return view('hello');
});


























// Route::get('/form',function (){
//     return view('form');
// });

// Route::get('/form',['class'::test,index]);

// Route::get('/form',[test::class],'index');




// Route::post('/formprocess',['class'::test,process]);