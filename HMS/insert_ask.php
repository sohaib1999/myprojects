<html>
<head>
<title>
Query Page
</title>
<style>

#i{
font-size:30px;
font-family:verdana;
color:#35AABC;
}
#m{
		background-color:black;
		color:white;
		padding:20px 16px;

	}
</style>
</head>
<body>
<span id="i"><i>Medify.Com</i></span>
<hr>
<h2 align="center">Your query has been submitted</h2>

<h3 align="center">We Thank You for using Medify </h3>


<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>

<?php 

	if(isset($_POST["submit"]))
	{
	require 'vendor/autoload.php';
	$client = new  MongoDB\Client;
	$db = $client->db;
	$collection = $db -> collection;
	
	$insertOneResult = $collection->insertOne([
	
	['Question'=>$_POST["Question"],'Name'=>$_POST["name"],'EmailAddress'=>$_POST["email"],
	'MobileNo'=>$_POST["number"]
	]
	]);
	printf("inserted %d documents",$insertOneResult->getInsertedCount());
	var_dump($insertOneResult->getInsertedId());
	}
?>
<p id="m">&copy; 2019&nbsp;Medify&reg;-All Rights Reserved<br>&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;<br></p>
</body>
</html>