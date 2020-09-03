<?php 

	require 'vendor/autoload.php';
	$client= new  MongoDB\Client;
	$db= $client->db;
	$table3=$db->table3;

	$document=$table3->find();
	foreach($document as $doc)
	{
	var_dump($doc);
	echo $doc["C"];
	echo $doc["D"];
	echo $doc["E"];
	echo $doc["F"];
	echo $doc["G"];
	}
?>