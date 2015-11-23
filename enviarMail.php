<?php
	require 'vendor/autoload.php';
	$sendgrid = new SendGrid('app44193749@heroku.com', 'j1mvpwjh5536');
	
	$message = new SendGrid\Email();
	$message->addTo('lsoto@soin.co.cr')->
	          setFrom('mrodriguez@soin.co.cr')->
	          setSubject('Asunto')->
	          setText('Hablada')->
	          setHtml('<strong>Hello World!</strong>');
	$response = $sendgrid->send($message);
?>