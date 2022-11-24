<?php
	// connect to mangodb
	$m = new MangoClient();
	
	echo "Connection to database succesfully";
	// select a database
	$db = $m->BEM;

	echo "Database mydb selected";
?>