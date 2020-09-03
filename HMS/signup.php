<html>
<head>
<title>
Signup Page
</title>
<style>
#a{
	background-color:skyblue;
}
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
	
 #s{
  right: 0;
  margin: 20px;
  max-width: 300px;
  border:1px;
  padding: 16px;
  background-color: white;
}


  input[type=text], input[type=password], input[type=email],input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  background: #f1f1f1;
}


.btn {
  background-color: #4CAF50;
  font-size:20px;
  padding: 16px 20px;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
<script>
function check()
{
	  var result=true;
	  
	  var i=document.getElementsByTagName("input");
	  
	  var atindex = i[1].value.indexOf('@');
	  
	  var dotindex = i[1].value.indexOf('.');
	  var plusindex=i[2].value.indexOf('+');
	  
	if(i[3].value != i[4].value)
	{
		result=false;
		i[3].style.borderColor="red";
		i[4].style.borderColor="red";
		alert("Password & Confirm Password values do not Match");
	}
	
	else if(atindex === 0 || dotindex <= 0 || dotindex>=i[1].value.length - 2)
	{
		i[1].style.borderColor="red";
		result=false;
		alert("please enter email in correct format");
	}
	
	else if((dotindex-atindex < 3 && dotindex-atindex > 0) || (atindex-dotindex < 3 && atindex-dotindex > 0))
		{
			i[1].style.borderColor="red";
		result=false;
		alert("please enter email in correct format");
	 }
	else if((i[2].value.length < 13) || plusindex == 0)
	{
		i[2].style.borderColor="red";
		result=false;
		alert("Enter mobile number in correct format");
	}
	else
	result=confirm("Are you sure you want to submit with the details given below");

	return(result);
}

</script>
</head>
<body>
<span id="i"><i>Medify.Com</i></span>
<hr>

<h2>Signup Here</h2>
<span id="s">
<form action="insert_signup.php" method="post" onsubmit="return check()">
<P>Name: <input type="text" name="C" placeholder="Enter name" required><br><br>
Email Address: <input type="email" name="D" placeholder="Enter email in a format like example@something.com" required><br><br>
Mob. no. <input type="number" name="E" placeholder="Enter mobile no of 10 digits with country code" required><br><br>
password: <input type="password" name="F" required><br><br>
Confirm password: <input type="password" name="G" required><br><br>
<input type="submit" Value="Submit" class="btn" style="font-size:20px;color:white;">
</form>
</span>
<br><br><br><br><br><br><br><br><br>
<p id="m">&copy; 2019&nbsp;Medify&reg;-All Rights Reserved<br>&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;<br></p>
</body>
</html>