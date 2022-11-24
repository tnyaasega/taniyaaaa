<?php
    // connect to mangodb
	$m = new MangoClient();
	echo "Connection to database succesfully";

    // select a database
	$db = $m->mydb;
    echo "Database mydb selected";
    $collection = $db->mycol;
    echo "Collection selected succesfully";

    $document = array(
        "title" => "MongoDB",
        "description" => "database",
        "likes" => 100,
        "url" => "http:s.id/oprec",
        "by", "tutorials point"
    );

    $collection->insert($document);
    echo "Document inserted succesfully";
?>