       <?php 

	require 'vendor/autoload.php';
	$client= new  MongoDB\Client;
	$db= $client->db;
	$table3=$db->table3;
	
	$document=$table3->find(
	['projection'=>['Name'=> 1,'_id'=> 0]]);
	
        foreach($document as $doc)
	{
	  var_dump($doc);
	}

        ?>