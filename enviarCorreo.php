<?php
	// Pear Mail Library
	require_once "Mail.php";

	$from = 'fernandezmartin.eduardo77@gmail.com';
	$to = 'lsoto@soin.co.cr';
	$subject = 'Hola!';
	$body = "Hola Lee!";

	$headers = array(
		'From' => $from,
		'To' => $to,
		'Subject' => $subject
	);

	$smtp = Mail::factory('smtp', array(
			'host' => 'ssl://smtp.gmail.com',
			'port' => '465',
			'auth' => true,
			'username' => 'fernandezmartin.eduardo77@gmail.com',
			'password' => 'Hondainvicta23'
		));

	$mail = $smtp->send($to, $headers, $body);

	if (PEAR::isError($mail)) {
		echo('<p>' . $mail->getMessage() . '</p>');
	} else {
		echo('<p>Message successfully sent!</p>');
	}
?>