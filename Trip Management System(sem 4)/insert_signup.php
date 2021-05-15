<html>

<head>

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

<span id="i"><i>TRIPPLANNER.COM</i></span>

<hr>

<h2 align="center">Your details has been submitted</h2>

<p align="center">They are :<br><br>

<span style="color:blue">

 <?php

 echo"<strong>Name : ".$_POST["C"]."<br>Email Address : ".$_POST["D"]."<br>Mobile Number  : ".$_POST["E"]."<br>Password : ".$_POST["F"]."</strong>";

 ?>
</span>

</p>
 
<h3 align="center">We Thank You for visiting TRIPPLANNER </h3>

<br><br><br><br><br><br><br><br><br><br><br>

       <?php 

	require 'vendor/autoload.php';
	$client= new  MongoDB\Client;
	$db= $client->db;
	$table3=$db->table3;
	
	$insertOneResult=$table3->insertOne([
	
	['Name'=>$_POST["C"],'EmailAddress'=>$_POST["D"],'MobileNo'=>$_POST["E"],
	 
	 'Password'=>$_POST["F"],'ConfirmPassword'=>$_POST["G"]]
	]);

	printf("inserted %d documents",$insertOneResult->getInsertedCount());

	var_dump($insertOneResult->getInsertedId());
       ?>

<p id="m">&copy; 2019&nbsp;TRIPPLANNER&reg;-All Rights Reserved<br>&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;<br></p>

</body>

</html>