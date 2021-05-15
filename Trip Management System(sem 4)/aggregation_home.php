      <?php 
	require 'vendor/autoload.php';
	$client= new  MongoDB\Client;
	$db= $client->db;
	$table1=$db->table1;
	$find=$table1->aggregate(
	[
	['$group'=>['_id'=>'$Destination','count'=>['$sum'=>1]]],
	['$sort'=>['count'=>-1]],
	['$limit'=>5]
	]
	);

	foreach($find as $agg){
	printf("%s has %d members\n",$agg['_id'],$agg['count']);
	}

	?>