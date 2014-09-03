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


	

});


Route::get('/test-ping', function(){
	$mandrill = new Mandrill('83SEaPaCVNraRXKrQHFOyw');
	$result = $mandrill->users->ping();
    print_r($result);
});

Route::get('/test-email', function(){
	
	
	$data = array('fullname'=>'Jefferson Salunga');
	dd(Mail::send('emails.welcome', $data, function($message){
		$message->from('no-replay@modularfusion.com', 'ModularFusion Inc' );
    	$message->to('freakyash_02@yahoo.com', 'Jefferson Salunga')->subject('Welcome!');
	}));

});

Route::get('/test-mail', function(){
	
	$mandrill = new Mandrill('83SEaPaCVNraRXKrQHFOyw');
    $message = array(
        'html' => '<p>Example HTML content</p>',
        'text' => 'Example text content',
        'subject' => 'example subject',
        'from_email' => 'no-reply@modularfusion.com',
        'from_name' => 'MFI',
        'to' => array(
            array(
                'email' => 'freakyash_02@yahoo.com',
                'name' => 'Salunga, Jefferson',
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
                'rcpt' => 'freakyash_02@yahoo.com',
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
        'google_analytics_domains' => array('modularfusion.com'),
        'google_analytics_campaign' => 'no-reply@modularfusion.com',
        'metadata' => array('website' => 'www.modularfusion.com'),
        'recipient_metadata' => array(
            array(
                'rcpt' => 'freakyash_02@yahoo.com',
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
    $send_at = '2014-08-02';
    $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);
    print_r($result);
});

Route::get('/test-mail-template', function(){

	$mandrill = new Mandrill('83SEaPaCVNraRXKrQHFOyw');
	$template_name = 'welcome';
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


Route::get('/php-mail', function(){
	$to      = 'freakyash_02@yahoo.com.com';
	$subject = 'The Test Email';
	$message = 'hello';
	$headers = 'From: no-preply@modularfusion.com' . "\r\n" .
    'Reply-To: no-preply@modularfusion.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	echo 'sending mail';
	echo mail($to, $subject, $message, $headers);

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





Route::get('/phpinfoko', function(){
	
});

