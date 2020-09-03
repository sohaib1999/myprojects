<html>
<head>
<title>
Query Page
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


  input[type=text], input[type=password],textarea,input[type=email],input[type=number] {
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
</head>
<body>
<span id="i"><i>Medify.Com</i></span>
<hr>

<h2>Query Page</h2>
<span id="s">
<form action="insert_ask.php" method="post">

<textarea placeholder="write your question here" name="Question" required></textarea>
<P>Name: <input type="text" name="name" required><br><br>
Email Address: <input type="email" name="email" required><br><br>
Mob. no. <input type="number" name="number" required><br><br>
<input type="submit"  class="btn" name="submit"style="font-size:20px;color:white;">
</form>
</span>
<br><br><br><br><br><br><br><br><br>
<p id="m">&copy; 2019&nbsp;Medify&reg;-All Rights Reserved<br>&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;<br></p>
</body>
</html>