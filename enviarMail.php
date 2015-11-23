<?php
	try {
	    require 'vendor/autoload.php';
		
		echo 'Hola mundo';
	} catch (Exception $e) {
	    echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
?>
