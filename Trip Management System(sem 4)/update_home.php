<?php 

	require 'vendor/autoload.php';
	$client= new  MongoDB\Client;
	$db= $client->db;
	$table1=$db->table1;

	$updateResult=$table1->updateMany(
	['Destination'=>'thailand'],
	['$set'=>['name'=>'john']]
	);
	printf("Matched %d documents \n",$updateResult->getMatchedCount());
	printf("Modified %d documents \n",$updateResult->getModifiedCount());
?>