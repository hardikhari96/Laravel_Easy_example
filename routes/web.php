<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;


/**    Simple Authentication **/

Route::get('/login', array(
  'uses' => 'demo\Authhari@showLogin'
));
// route to process the form
Route::post('/login', array(
  'uses' => 'demo\Authhari@doLogin'
));
Route::get('logout', array(
  'uses' => 'demo\Authhari@doLogout'
));



/**    Main Page **/

Route::get('/', function () {
    return view('welcome');
});





/**    Script test Page **/

Route::get('/script', function () {
    return view('script');
});





/*** hari Page **/

Route::get('/hari', function () {
    return array('status'=>'true','message'=>'successfully accessed');
});


/*** posthari Page **/

Route::get('/posthari','users\Users@test');


/*** dir Page **/

Route::get('/dir','users\Users@directory');


/*** Database Page **/


Route::group(['prefix'=>'database'],function () {
        
          Route::get('/',function(){
            return view('database');
          });

          Route::get('/select','users\Users@database');

          Route::get('/insert','users\Users@insert');

          Route::get('/delete','users\Users@delete');
          
           Route::get('/update','users\Users@update');

          Route::get('/ssingle','users\Users@single');
});



/*** methods Page **/

Route::group(['prefix'=>'methods'],function () {

      Route::get('/',function(){
        return view('method');
      });


      Route::get('/getplain/{name}','Methods@getinline');
      Route::get('/get/',function(){
        return "Nothing Here";
      });
      Route::get('/get/value','Methods@getquestion');
      Route::get('/denimdemo',function(){
        return view('demoframe');
      });
      Route::post('/post','Methods@postcontroller');
      Route::post('/postview','Methods@postview');

      /* insert in test table using model *********/
      Route::post('/insertdata','Methods@sentdataindb');
      Route::get('/get/fetchall','Methods@featchall');


});


/* test *********/


Route::group(['prefix'=>'auth'],function () {


      // Authentication routes...
      Route::get('/login', 'Auth\AuthController@getLogin');
      Route::get('/login',function(){
        return view('auth/login');
      });

      Route::post('/login', 'Auth\AuthController@postLogin');
      Route::get('/logout', 'Auth\AuthController@getLogout');

      // Registration routes...
      Route::get('/register', 'Auth\AuthController@getRegister');
      Route::post('/register', 'Auth\AuthController@postRegister');

});




/******** Woocommerce Api **********/


Route::get('/woocommerce/api', function () {
    return ['cst_key' => env('CST_KEY','key'),'cst_sec'=>env('CST_SEC','key')];
});

Route::get('/woocommerce/api/products', 'woocommerce\products@GetAllProducts');
Route::get('/woocommerce/api/products/{id}', 'woocommerce\products@getSingleProduct');


/******** Woocommerce view **********/
Route::get('/woocommerce', function () {
    return view('woocommerce.index');
});
Route::get('/woocommerce/products', function () {
    return view('woocommerce.products');
});

Route::get('/woocommerce/products/{id}', function ($id) {
    return view('woocommerce.product',['id'=>$id]);
});


/*** Multilevel Marketing ***/

Route::get('/marketing', function () {
    return view('mlm.index');
});


Route::get('/marketing/tree', function () {
    return view('mlm.tree');
});


