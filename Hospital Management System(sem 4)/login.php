<html>
<head>
<title>
Login Page
</title>
<style>
a{
	text-decoration:none;
	color:blue;
}

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
 
}


  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  background: #f1f1f1;
}


.btn {
  background-color: #4CAF50;
  padding: 16px 20px;
  cursor: pointer;
  border:none;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
#b{
	font-size:20px;
}
</style>
</head>
<body>
<span id="i"><i>Medify.Com</i></span>
<hr>
<h1 id="a">Login Panel</h1>
<center><h2>
Medify Login
</h2>
<p>Login up to access your details from any device<br>
By continuing, you agree to Inspirock's Terms of Use and Privacy policy
</p></center>
<form action="insert_login.php" method="post">
<p>UserName:<input type="text" name="A" required></p>
<p>Password:<input type="password" name="B" required></p>
<input type="submit" Value="Login" class="btn" style="font-size:20px;color:white;">
</form>
<center>
<p style="font-size:20px;">Don't have an account? <a href="signup.php">Signup</a></p>
</center>
<br><br><br><br><br><br><br><br><br>
<p id="m">&copy; 2019&nbsp;Medify&reg;-All Rights Reserved<br>&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;<br></p>
</body>
</html>