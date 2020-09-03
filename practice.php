<html>
<head>
<title>
Signup Page 
</title>
<link rel="stylesheet" href="eg.css" type="text/css">

</head>
<body>

<form action="practice.php" method="post" onsubmit="return warn()">
Address
<blockquote>
Address: <input name="id" type="text" required ><br>
Zip code: <input name="id" type="number" required ><br>
</blockquote>
Tick if Same <input type="checkbox" onclick="copy()">
<br>
Secondary address:
<blockquote>
Address: <input name="id" type="text" required ><br>
Zip code: <input name="id" type="number" required ><br>
<input type="submit" name="submit" >
</blockquote>
</form>
<script>
function disp()
{
	var f=1,i;
	var n=prompt("Enter the No.");
	for(i=1;i<=n;i++)
	{
		f=f*i;
	}
	alert("factorial of "+n+" is "+f);
}
var a=document.getElementsByName("id");
function warn(){
	var result=true;
	if(a[1].value.length!=6 || a[3].value.length!=6)
	{
		alert("enter Zip code in correct format");
	result=false;
	}
return result;
}
function copy()
{
	
	a[2].value=a[0].value;
	a[3].value=a[1].value;
	
}
function check()
{
	var a=document.getElementsByTagName("input")[4].value;
	for(var i=0;i<a.length;i++)
	{
	var b=a.charCodeAt(i);
	if(!(b>47 && b<58)&& !(b>64 && b<91) && !(b>96 && b<123))
	return false;
	}
	return true;
}
</script>
<?php 

if(isset($_POST["submit"]))
{
	$x=$_POST["id"];
	/* program to check prime no,succesfuly executed without any help from internet
$x = $_POST['id'];
$i=2;

	while($i<$x)
	{
	if($x % $i == 0){
	echo"$x is  Not prime";
	break;
	}
	else
		{
		$i++;	
		}      
		}
if($i==$x)
{
	echo"$x is prime";
	
}
*/
}
?>
<center>
<h1>
Signup</h1>
<br>
<button id="a">Proceed</button>
</center>
<div id="d">
<form action="welcome.php" method="post" onsubmit="return check()">
<h4>User id:</h4>
<input type="text"name="id" placeholder="    id" style="width:980px; height:40px;" max="12" min="5" required><br>
<h4>Password:</h4>
<input type="text" name="password" placeholder="    Password" style="width:980px; height:40px;" max="12" min="7" required><br>
<h4>Confirm Password:</h4>
<input type="text" name="confirmpassword" placeholder="    Confirm Password" style="width:980px; height:40px;" required oninput="check(this)"><br>
<script type="text/javascript">
</script>

<h4>Name:</h4>
<input type="text" name="Name" placeholder="    Enter Name" style="width:980px; height:40px;" required><br>
<h4>Address:</h4>
<input type="text" name="address" placeholder="    Address" style="width:980px; height:40px;" required><br><br>
<strong>Country:</strong>
<select name="list">
<option>(Please select a country)</option>
<option>China</option>
<option>US</option>
<option>India</option>
<option>Nepal</option>
<option>Japan</option>
<option>Dubai</option>
<option>Germany</option>
</select>
<h4>ZIP Code:</h4>
<input type="text" name="zip" placeholder="    ZIP Code" style="width:980px; height:40px;" size="6" required><br>
<h4>Email:</h4>
<input type="text" name="email" placeholder="    email" style="width:980px; height:40px;" required><br><br>
<strong>Gender:</strong>
<input type="radio" name="a" required>Male
<input type="radio" name="b" required>Female<br><br>
<strong>Language:</strong> 
<span>
<input type="Checkbox" name="e" checked>English
<input type="Checkbox" name="e" > Non English</span><br><br>
<strong>About:<br></strong><br>
<textarea name="g" rows="4" cols="40" required></textarea><br><br>
<input type="Checkbox" checked>Remember me <br><br>
By creating an account you agree to our &nbsp;<a href=".html">Terms & Privacy</a><br><br><br>
<a href="signup.php" >
<button type="button" onclick="the page will be displayed in a moment" id="b">Cancel</button>
</a>
<a href="signup.php" >
<input type="submit" value="Submit" onclick="the page will be displayed in a moment" id="c">
</a>
</form>
</div>
</body>
</html>