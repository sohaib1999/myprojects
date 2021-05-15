<html>

<head></head>

<body>

     <?php 

	require 'vendor/autoload.php';
	$client= new  MongoDB\Client;
	$db= $client->db;
	$table1=$db->table1;
	
	$insertOneResult=$table1->insertOne([
	['Destination'=>$_POST["H"],'Date'=>$_POST["I"]]]);

	printf("inserted %d documents",$insertOneResult->getInsertedCount());

	var_dump($insertOneResult->getInsertedId());
      ?>

</body>

</html>