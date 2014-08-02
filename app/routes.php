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

	$url = cURL::buildUrl('http://mfi-htk.herokuapp.com/api/test', array());
	$response = cURL::post($url, array('post' => 'data'));

	echo $response->code.'<br>';
	echo $response->body.'<br>';
	echo json_encode($response->headers);


	$data = array('fsaf'=>'fsafsa');
	Mail::send('emails.welcome', $data, function($message){
    	$message->to('freakyash_02@yahoo.com', 'Jefferson Salunga')->subject('Welcome!');
	});

});


Route::get('/test-ping', function(){
	$mandrill = new Mandrill('83SEaPaCVNraRXKrQHFOyw');
	$result = $mandrill->users->ping();
    print_r($result);
});


Route::get('/test-mail', function(){

	$mandrill = new Mandrill('83SEaPaCVNraRXKrQHFOyw');
    $message = array(
    'subject' => 'Test message',
    'from_email' => 'no-reply@modularfusion.com',
    'html' => '<p>this is a test message with Mandrill\'s PHP wrapper!.</p>',
    'to' => array(array('email' => 'freakyash_02@yahoo.com', 'name' => 'Jefferson Salunga')),
    'merge_vars' => array(array(
        'rcpt' => 'freakyash_02@yahoo.com',
        'vars' =>
        array(
            array(
                'name' => 'FIRSTNAME',
                'content' => 'Jefferson'),
            array(
                'name' => 'LASTNAME',
                'content' => 'Salunga')
    ))));

	$template_name = 'Stationary';

	$template_content = array(
    array(
        'name' => 'main',
        'content' => 'Hi *|FIRSTNAME|* *|LASTNAME|*, thanks for signing up.'),
    array(
        'name' => 'footer',
        'content' => 'Copyright 2012.')

);

print_r($mandrill->messages->sendTemplate($template_name, $template_content, $message));

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
