        <?php 

	require 'vendor/autoload.php';
	$client= new  MongoDB\Client;
	$db= $client->db;
	$table3=$db->table3;
	$find=$table3->aggregate(
	[
	['$group'=>['_id'=>'$Name','count'=>['$sum'=>1]]],
	['$sort'=>['count'=>-1]],
	['$limit'=>5]
	]
	);

	foreach($find as $agg){
	printf("%s has %d members\n",$agg['_id'],$agg['count']);
	}

	?>