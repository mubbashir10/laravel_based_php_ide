<?php

use Illuminate\Support\Facades\Input;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//welcome
Route::get('/', function () {return view('common.home');});

//signup
Route::get('/signup', function () {return view('secure.signup');});

//registration
Route::post('/success', 'accountManagement@registerUser');

//success
Route::get('/success', function (){return view('secure.login') -> with('msg','<p class="green" style="font-size:12px;">Success! Your account has been registered successfully.');});    

//log in
Route::get('/login', function (){return view('secure.login') -> with('msg','');});

//dashboard
Route::post('/dashboard', 'accountManagement@loginUser');
Route::get('/dashboard', function(){

    if(!isset($_COOKIE['livePHPUsername'])){

        return view('secure.login') -> with('msg','<p class="red" style="font-size:12px;">Error! You must login first.');
    }
    else{
        
        //deciding role
        if($_COOKIE['livePHPRole']==0)
            return view('secure.dashboard') -> with ('code', '');
        else{
            
            $list = Log::all();
            return view('secure.dashboardAdmin') -> with ('list', $list);
        }

    }    

});

//execute
Route::post('/execute', 'userDashboard@executeCode');

//signout
Route::post('/signout', 'userDashboard@signOut');


