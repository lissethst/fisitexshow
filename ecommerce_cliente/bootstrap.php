<?php 
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

require __DIR__.'/vendor/autoload.php';

$apiContext = new ApiContext(
	new OAuthTokenCredential(
		'AX7ZmIN-W34bsCDsehBjlMtcI3WyBypTBQ1lt8BG5cFJQBQ-xt-AgBPELomfNm0E-TEpHFVPhpOfDI1g',
		'EHf7mgPEovizV-eZsOig--GQyHxl_vMH1QbkaYsBnAVNpPrQGSVV4TYWrb8UUYZZsMGKCEmHoLZqyG7c'
	)
);

$apiContext->setConfig(
	array(
		'mode' => 'sandbox',
		'http.ConnectionTimeOut' => 30,
		'log.LogEnable' => true,
		'log.Filename' => 'PayPal.log',
		'log.LogLevel' => 'DEBUG',

	)
);

 ?>