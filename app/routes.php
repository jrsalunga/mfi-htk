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

	$url = cURL::buildUrl('http://mfi-htk.herokuapp.com/api/test', []);
	$response = cURL::post($url, ['post' => 'data']);

	echo $response->code.'<br>';
	echo $response->body.'<br>';
	echo json_encode($response->headers);


	$data = ['fsaf'=>'fsafsa'];
	Mail::send('emails.welcome', $data, function($message){
    	$message->to('jefferson.salunga@yahoo.com', 'Jefferson Salunga')->subject('Welcome!');
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
        'html' => '<p>Example HTML content</p>',
        'text' => 'Example text content',
        'subject' => 'example subject',
        'from_email' => 'no-reply@modularfusion.com',
        'from_name' => 'Modular Fusion',
        'to' => array(
            array(
                'email' => 'jefferson.salunga@yahoo.com',
                'name' => 'Jefferson Salunga',
                'type' => 'to'
            )
        ),
        'headers' => array('Reply-To' => 'no-reply@modularfusion.com'),
        'important' => false,
        'track_opens' => null,
        'track_clicks' => null,
        'auto_text' => null,
        'auto_html' => null,
        'inline_css' => null,
        'url_strip_qs' => null,
        'preserve_recipients' => null,
        'view_content_link' => null,
        'bcc_address' => null,
        'tracking_domain' => null,
        'signing_domain' => null,
        'return_path_domain' => null,
        'merge' => true,
        'global_merge_vars' => array(
            array(
                'name' => 'merge1',
                'content' => 'merge1 content'
            )
        ),
        'merge_vars' => array(
            array(
                'rcpt' => 'recipient.email@example.com',
                'vars' => array(
                    array(
                        'name' => 'merge2',
                        'content' => 'merge2 content'
                    )
                )
            )
        ),
        'tags' => array('password-resets'),
        'subaccount' => 'customer-123',
        'google_analytics_domains' => array('example.com'),
        'google_analytics_campaign' => 'message.from_email@example.com',
        'metadata' => array('website' => 'www.example.com'),
        'recipient_metadata' => array(
            array(
                'rcpt' => 'recipient.email@example.com',
                'values' => array('user_id' => 123456)
            )
        ),
        'attachments' => array(
            array(
                'type' => 'text/plain',
                'name' => 'myfile.txt',
                'content' => 'ZXhhbXBsZSBmaWxl'
            )
        ),
        'images' => array(
            array(
                'type' => 'image/png',
                'name' => 'IMAGECID',
                'content' => 'ZXhhbXBsZSBmaWxl'
            )
        )
    );
    $async = false;
    $ip_pool = 'Main Pool';
    $send_at = 'example send_at';
    $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);
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
