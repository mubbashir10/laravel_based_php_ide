<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Log;
use Illuminate\Http\Request;
use Session;


class accountManagement extends Controller {

    //sign up
    public function registerUser(Request $request)
    {
        
        //making object of user class
        $user = new User;

        //encrypting password
        $pwdEn = sha1($request->password);

        //checking role
        if($request->role)
        	$role = 1;

        else
        	$role = 0;

        //saving values
		$user->fullname = $request->fullname;
		$user->username = $request->username;
		$user->password = $pwdEn;
		$user->role = $role;

		//updating database
		$user->save();

		//returning to login
		return view('secure.login') -> with('msg','<p class="green" style="font-size:12px;">Success! Your account has been registered successfully.');
		
    
    }

    //login
    public function loginUser(Request $request)
    {

    	//making object
    	$user = new User;
        
        //authenticating
        $usr = $request->username;
        $pwd = sha1($request->password);
        $result = $user->where('username', $usr)->where('password', $pwd)->get();

        //starting session
       	setcookie('livePHPUsername', $usr, time() + (86400 * 30), "/");

        if(count($result)>0){

        	$role = $result[0]->role;
        	setcookie('livePHPRole', $role, time() + (86400 * 30), "/");

        	//deciding role
        	if($role==0)
        		return view('secure.dashboard') -> with ('code', '');
        	else{
        		
        		$list = Log::all();
        		return view('secure.dashboardAdmin') -> with ('list', $list);
        	}	

        }

        else
        	return view('secure.login') -> with('msg','<p class="red" style="font-size:12px;">Error! Invalid username/password.');
    
    }
}