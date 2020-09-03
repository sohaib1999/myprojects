<html>
<body>

<?php 

	require 'vendor/autoload.php';
	$client= new  MongoDB\Client;
	$db= $client->db;
	$table1=$db->table1;

	$document=$table1->find();
	foreach($document as $doc)
	{
		print_r($doc);
	}

?>
</body>
</html>