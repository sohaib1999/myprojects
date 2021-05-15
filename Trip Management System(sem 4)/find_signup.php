        <?php 

	require 'vendor/autoload.php';
	$client= new  MongoDB\Client;
	$db= $client->db;
	$table3=$db->table3;

	$document=$table3->find();

	foreach($document as $doc)
	{
	 print_r($doc);
	}
        
         ?>