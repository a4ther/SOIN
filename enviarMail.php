<?php
	try {
	    require 'vendor/autoload.php';
		$sendgrid = new SendGrid('app44193749@heroku.com', 'j1mvpwjh5536');
		$message = new SendGrid\Email();
		$message->addTo('lsoto@soin.co.cr')->
		          setFrom($_POST['txtEmail'])->
		          setSubject($_POST['txtAsunto'])->
		          setText($_POST['txtMensaje'])->
		          setHtml('<strong>'.$_POST['txtMensaje'].'</strong>');
		$response = $sendgrid->send($message);
		echo 1;
	} catch(\SendGrid\Exception $e) {
	    echo 0;
	}
?>