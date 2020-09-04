<?php

namespace App\Http\Controllers\woocommerce;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class products extends Controller
{

	private $url = 'https://shop.haripatel.co.in/wp-json/wc/v3';
	
    function GetAllProducts(){


			
			 $ch = curl_init($this->url.'/products');
			

			curl_setopt($ch, CURLOPT_USERPWD, env('CST_KEY','key'). ":" . env('CST_SEC','key'));  
			 

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$response = curl_exec($ch);

			if(curl_errno($ch)){

			    throw new Exception(curl_error($ch));
			}
 
    return ['status'=>true,'products'=>json_decode($response)];
    }


    function getSingleProduct($id){

    	$ch = curl_init($this->url.'/products/'.$id);
			

			curl_setopt($ch, CURLOPT_USERPWD, env('CST_KEY','key'). ":" . env('CST_SEC','key'));  
			 

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$response = curl_exec($ch);

			if(curl_errno($ch)){

			    throw new Exception(curl_error($ch));
			}

    	return ['status'=>true,'product'=>json_decode($response)];
    }

    
}
