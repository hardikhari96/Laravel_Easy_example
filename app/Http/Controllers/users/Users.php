<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\test;

class Users extends Controller
{
    function test(){
    	return array('status'=>'true','message'=>'You accessed Controlloer','namespage'=>'controllor users/Users@test()');
    }
    
    function database(){
    	$test = DB::select('select * from tests');
    	return array('status'=>'true','message'=>'You accessed Database','namespage'=>'controllor users/Users@database()','data'=>$test);
    }

    function insert(){
         //$name =  array('name'=>Input::get('name'));
        //$action = DB::table('tests')->insert($name);
        #insert data using model
       $test = new test;
       $test->name = Input::get('name');
        $action = $test->save();
        if($action){
            return array('status'=>$action,'message'=>'data inserted');
        }else{
            return array('status'=>$action);
        }
        
    }
    function delete(){

        $id =  array('name'=>Input::get('id'));

        $action = DB::table('tests')->delete($id);

        if($action){
            return array('status'=>$action,'data'=>$id,'message'=>'data Deleted');
        }else{
            return array('status'=>$action);
        }
        
    }

    function update(){

        $id     = Input::get('id');
        $name   =  Input::get('name');
 
        $test = test::find($id);

        $test->name = $name;
        $msg = $test->save();

       
      if($msg){
            return array('status'=> $msg,'data'=> $test,'message'=>'data Updated');
        }else{
            return array('status'=> $msg);
        }
        
    }
    function single(){


        $id     = Input::get('id');
        $test = test::find($id);
        $test->get();

        return $test;
    }
    function directory(){
    	return view('welcome');
    }
}


