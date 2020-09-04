<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Users extends Controller
{
    function test(){
    	return array('status'=>'true','message'=>'You accessed Controlloer','namespage'=>'controllor users/Users@test()');
    }
    
    function database(){
    	$test = DB::select('select * from test');
    	return array('status'=>'true','message'=>'You accessed Database','namespage'=>'controllor users/Users@database()','data'=>$test);
    }

    function insert(){
        $name =  array('name'=>Input::get('name'));
        $action = DB::table('test')->insert($name);
        if($action){
            return array('status'=>$action,'data'=>$name,'message'=>'data inserted');
        }else{
            return array('status'=>$action);
        }
        
    }
    function delete(){

        $id =  array('name'=>Input::get('id'));

        $action = DB::table('test')->delete($id);

        if($action){
            return array('status'=>$action,'data'=>$id,'message'=>'data Deleted');
        }else{
            return array('status'=>$action);
        }
        
    }

    function update(){

        $id =  array('name'=>Input::get('id'));
        $id =  array('name'=>Input::get('id'));

        $action = DB::table('test')->where('name')->delete($id);
        
        if($action){
            return array('status'=>$action,'data'=>$id,'message'=>'data Deleted');
        }else{
            return array('status'=>$action);
        }
        
    }
    function directory(){
 
    	return view('welcome');
    }
}


