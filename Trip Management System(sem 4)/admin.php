<html>
<head>
<title>
Admin Page
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


  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  background: #f1f1f1;
}



.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
<script src="admin.js">
</script>
</head>
<body>
<span id="i"><i>TRIPPLANNER.COM</i></span>
<hr>
<h1 id="a">Admin Panel</h1>
<center>
<h2>
Trip Planner Login
</h2>
</center>
<span id="s">
<form action="insert_admin.php" method="post" onsubmit="return validate()">

<p>UserName:<input type="text" name="J" required></p>
<p>Password:<input type="password" name="K" required></p>
<input type="submit" Value="Login" name="submit" class="btn" style="font-size:20px;color:white;">
</form>
</span>

<br><br><br><br><br><br><br><br><br>
<p id="m">&copy; 2019&nbsp;Trip Planner&reg;-All Rights Reserved<br>&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;<br></p>
</body>
</html>