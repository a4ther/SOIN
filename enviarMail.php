<?php
	try {
	    require 'vendor/autoload.php';
		
		echo $response;
	} catch (Exception $e) {
	    echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
?>
