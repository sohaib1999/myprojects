<html>

<head></head>

<body>

        <?php 

	require 'vendor/autoload.php';
	$client= new  MongoDB\Client;
	$db= $client->db;
	$table2=$db->table2;
	
	$insertOneResult=$table2->insertOne([
	['username'=>$_POST["A"],'password'=>$_POST["B"]]]);

	printf("inserted %d documents",$insertOneResult->getInsertedCount());

	var_dump($insertOneResult->getInsertedId());

       ?>

</body>

</html>
