<?php 

	require 'vendor/autoload.php';
	$client= new  MongoDB\Client;
	$db= $client->db;
	$table2=$db->table2;
	$find=$table2->aggregate(
	[
	['$group'=>['_id'=>'$username','count'=>['$sum'=>1]]],
	['$sort'=>['count'=>-1]],
	['$limit'=>5]
	]
	);
	foreach($find as $agg){
	printf("%s has %d members\n",$agg['_id'],$agg['count']);
	}
	?>