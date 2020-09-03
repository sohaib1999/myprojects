<?php 

	require 'vendor/autoload.php';
	$client= new  MongoDB\Client;
	$db= $client->db;
	$table2=$db->table2;
	
	$document=$table2->find(
	['projection'=>['username'=> 1,'_id'=> 0]]);
	foreach($document as $doc)
	{
	var_dump($doc);
	}
?>