<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Log;
use Illuminate\Http\Request;
use Session;

class userDashboard extends Controller {

    //execute code
    public function executeCode(Request $request)
    {
        //making logs object   
        $log = new Log;

        //getting values
        $usr = $_COOKIE['livePHPUsername'];
        $rawCode = $request->data;
        $result = preg_replace('/^<\?php(.*)(\?>)?$/s', '$1', $rawCode);

        //saving values
		$log->username = $usr;
		$log->data = $rawCode;

		//updating database
		$log->save();

		//returning to login
		return view('secure.dashboard') -> with ('code', $result);
	
    }

    //sign out
    public function signOut(Request $request)
    {

        //flushing cookie
        if (isset($_SERVER['HTTP_COOKIE'])) {
            $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
            foreach($cookies as $cookie) {
                $parts = explode('=', $cookie);
                $name = trim($parts[0]);
                setcookie($name, '', time()-1000);
                setcookie($name, '', time()-1000, '/');
            }
        }


        //redirect
        return view('secure.login') -> with('msg','<p class="red" style="font-size:12px;">You have been signed out of your account.');
    
    }


}