<?php 

	require 'vendor/autoload.php';
	$client= new  MongoDB\Client;
	$db= $client->db;
	$table1=$db->table1;

	$deleteResult=$table1->deleteOne(
	['Destination'=>'korea']
	);
	printf("deleted %d documents \n",$deleteResult->getDeletedCount());
	?>