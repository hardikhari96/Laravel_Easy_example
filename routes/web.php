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

Route::get('/database',function(){
	return view('database');
});

Route::get('/database/select','users\Users@database');

Route::get('/database/insert','users\Users@insert');

Route::get('/database/delete','users\Users@delete');

/*** methods Page **/

Route::get('/methods',function(){
	return view('method');
});


Route::get('/methods/getplain/{name}','Methods@getinline');
Route::get('/methods/get/',function(){
	return "Nothing Here";
});
Route::get('/methods/get/value','Methods@getquestion');
Route::get('/denimdemo',function(){
	return view('demoframe');
});
Route::post('/methods/post','Methods@postcontroller');
Route::post('/methods/postview','Methods@postview');

/* insert in test table using model *********/
Route::post('/methods/insertdata','Methods@sentdataindb');





/* test *********/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::get('auth/login',function(){
	return view('auth/login');
});

Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');






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


