       <?php 

	require 'vendor/autoload.php';
	$client= new  MongoDB\Client;
	$db= $client->db;
	$table2=$db->table2;

	$deleteResult=$table2->deleteOne(
	['username'=>'ABC']
	);

	printf("deleted %d documents \n",$deleteResult->getDeletedCount());

	?>