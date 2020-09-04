<?php

namespace App\Http\Controllers\demo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Input;
use IlluminateSupportFacadesValidator;
use IlluminateFoundationBusDispatchesJobs;
use IlluminateRoutingController as BaseController;
use IlluminateFoundationValidationValidatesRequests;
use IlluminateFoundationAuthAccessAuthorizesRequests;
use IlluminateFoundationAuthAccessAuthorizesResources;
use IlluminateHtmlHtmlServiceProvider;


class Authhari extends Controller
{
    public function showLogin(){
    	return view('auth.login');
    }

    public function doLogout(){
 		Auth::logout();
 		return Redirect::to('login');
    }

    public function doLogin(){

    	$rules = array(
      'email' => 'required|email', // make sure the email is an actual email
      'password' => 'required|alphaNum|min:8');


    	$validator = Validator::make(Input::all() , $rules);

    	if ($validator->fails()) {
    
    	return Redirect::to('login')
    		  	->withErrors($validator) // send back all errors to the login form
        		->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form

    	}else{


    		 $userdata = array(
			          'email' => Input::post('email') ,
			          'password' => Input::post('password')
			        );
    		 if (Auth::attempt($userdata)) {
    		 	// validation successful
          		// do whatever you want on successful

    		 }
    		 else
	          {
	          // validation not successful, send back to form
	         	 return Redirect::to('checklogin');
	          }

    	}

    }
}
