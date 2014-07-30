<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});



Route::get('/test-api', function(){
	//$curl = new anlutro\cURL\cURL;
	//$url = $curl->buildUrl('http://htk.mfi.com/api/test', []);
	//$response = $curl->post($url, ['post' => 'data']);

	$url = cURL::buildUrl('http://htk.mfi.com/api/test', []);
	$response = cURL::post($url, ['post' => 'data']);

	echo $response->code.'<br>';
	echo $response->body.'<br>';
	echo json_encode($response->headers);


	$data = ['fsaf'=>'fsafsa'];
	Mail::send('emails.welcome', $data, function($message){
    	$message->to('jefferson.salunga@yahoo.com', 'Jefferson Salunga')->subject('Welcome!');
	});

});




Route::get('/test-mail', function(){

	$mandrill = new Mandrill('83SEaPaCVNraRXKrQHFOyw');
    $result = $mandrill->users->ping();
    print_r($result);

});


Route::post('/api/test', function(){
	//echo 'ok';
	//echo Input::get('s');
	//echo Input::get('post');
	echo json_encode($_POST);
});


Route::get('/env', function(){
	
});


Route::get('/env/hostname', function()
{
	return gethostname();
});
