      <?php 

	require 'vendor/autoload.php';
	$client= new  MongoDB\Client;
	$db= $client->db;
	$table2=$db->table2;

	$document=$table2->find();

	foreach($document as $doc)
	{
	  print_r($doc);
	}
       
        ?>