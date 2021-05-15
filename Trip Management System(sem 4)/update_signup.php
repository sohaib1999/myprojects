       <?php 

	require 'vendor/autoload.php';
	$client= new  MongoDB\Client;
	$db= $client->db;
	$table3=$db->table3;

	$updateResult=$table3->updateMany(
	['Name'=>'josh'],
	['$set'=>['country'=>'australia']]
	);

	printf("Matched %d documents \n",$updateResult->getMatchedCount());

	printf("Modified %d documents \n",$updateResult->getModifiedCount());

       ?>