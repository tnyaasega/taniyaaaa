<?php
    // connect to mangodb
	$m = new MangoClient();
	echo "Connection to database succesfully";

	// select a database
	$db = $m->mydb;
    echo "Database mydb selected";
    $collection = $db->createCollection("BEM");
    echo "Collection created succesfully";
?>