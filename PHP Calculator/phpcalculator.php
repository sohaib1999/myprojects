<html>

<head>

<title>calculator 2K19</title>

<style>

#heading
{
background-color:#23AB78;
text-align:center;
padding:14px;
}

body
{
position:relative;
}

input[type=number],input[type=text]
{
width: 50%;
padding: 15px;
height:25px;
background-color:#f1f1f1;
}

input[type=submit]
{
height:23px;
width:30%;
background-color:#23AB78;
border:none;
color:white;
padding:5px 5px;
font-size:15px;
cursor:pointer;
}

input[type=submit]:hover
{
opacity:0.8;
}

#form{
position:absolute;
top:.1%;
left:50%;
transform:translate(-60%,65%);
font-size:20px;
}

#answer{
	color:blue;
	font-size:30px;
}

</style>

</head>

<body>

<div id="heading">

<h1>Calculator</h1>

</div>

<div id="form" align="center">

<form action="phpcalculator.php" method="post" >

                                  
            Enter Number 1: <input id="i1" type="number" name="num1" step="0.001"><br><br>
			
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Operator : <input id="i3" type="text" placeholder="+, -, * or /" name="optr"><br><br>
			
            Enter Number 2: <input id="i2" type="number" name="num2" step="0.001"><br><br>
			
&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit"> 
						   
						
							
				    
                   
</form>

</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div id="answer" align="center">

<?php 

if(isset($_POST["submit"]))
{
	
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$optr=$_POST["optr"];

if($optr=="+")
echo"Answer : ".($num1+$num2);

else if($optr=="-")
echo"Answer : ".($num1-$num2);

else if($optr=="*")
echo"Answer : ".($num1*$num2);

else if($optr=="/")
echo"Answer : ".($num1/$num2);

else
echo"Invalid input";

}

?>

</div>

</body>

</html>