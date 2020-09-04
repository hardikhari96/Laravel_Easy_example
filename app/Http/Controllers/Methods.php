<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\test;

class Methods extends Controller
{
   	function getinline($name){
   		return array($name);
   	}
   	function getquestion(){
   		 $key1 = Input::get('key1');
   		 $key2 = Input::get('key2');
   		return array($key1,$key2);
   	}
   	public function postview(Request $request)
    {
        $name = $request->input('name');
        $all = $request->all();

        return view('postmethodshow',array('single'=>$name,'all'=>$all));
    }
    public function postcontroller(Request $request)
    {

      $name = $request->input('name');
        

        return array('single'=>$name,'all'=>$all);

    }
     public function sentdataindb(Request $request)
    {
         $test = new test;
        $test->name = $request->input('name');

        return array('success'=> $test->save());
    }
}
