        <?php 

	require 'vendor/autoload.php';
	$client= new  MongoDB\Client;
	$db= $client->db;
	$table3=$db->table3;

	$deleteResult=$table3->deleteOne(
	['Name'=>'jack']
	);

	printf("deleted %d documents \n",$deleteResult->getDeletedCount());

	?>