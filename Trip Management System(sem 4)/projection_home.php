        <?php 

	require 'vendor/autoload.php';
	$client= new  MongoDB\Client;
	$db= $client->db;
	$table1=$db->table1;
	
	$document=$table1->find(
	['projection'=>['Destination'=> 1,'_id'=> 0]]);

	foreach($document as $doc)
	{
	 printf($doc);
	}

        ?>