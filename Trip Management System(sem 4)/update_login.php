       <?php 

	require 'vendor/autoload.php';
	$client= new  MongoDB\Client;
	$db= $client->db;
	$table2=$db->table2;

	$updateResult=$table2->updateMany(
	['username'=>'redmi'],
	['$set'=>['country'=>'malaysia']]
	);

	printf("Matched %d documents \n",$updateResult->getMatchedCount());

	printf("Modified %d documents \n",$updateResult->getModifiedCount());
 
        ?>