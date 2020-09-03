<!DOCTYPE html>

<html>

<head>

<title>Trip Planner: Plan & manage your vacation itinerary</title>

<style type="text/css">

a{
text-decoration:none;
}

#a{
background-color:green;
font-size:20px;
color:white;
}

#b{
font-family:sans-serif;
font-size:20px;
text-transform:justify;
}

#c{
font-size:30px;
}

#d{
font-size:30px;
}

#e{
font-size:30px;
}

#f{
font-size:20px;
text-transform:justify;
}

#g{
font-size:20px;
text-transform:justify;
}

#h{
font-size:20px;
text-transform:justify;
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

#j{
position:relative;
text-align:center;
color: white;
cursor:pointer;
}

#n{
position:absolute;
top: .1%;
left: 50%;
transform: translate(-50%, -250%);
font-size:40px;
}

.q{
color:skyblue;
}
	
#r{
position: relative;
text-align: right;
color: white;
}
	
body, html{
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-img {
  background-image: url("download2.jpg");
  min-height: 380px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

 #s{
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
  }

input[type=text], input[type=date] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=date]:focus {
  background-color: #ddd;
  outline: none;
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

#j:hover{
	opacity:0.8;
   }
   
</style>

<script>

function notification()
{
	alert("we want to send you notifications");
}
setTimeout(notification,5000);

</script>

</head>

<body>

<span id="i"><i>TRIPPLANNER.COM</i></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<span class="j">

          <span>Refer & Earn</span>&nbsp;&nbsp;
		  
         <span>Earn Upto Rs 7000 </span>&nbsp;&nbsp;
         
          <span><i>Gift Cards</i></span> &nbsp;&nbsp;
		  
          <span><i>Gift an experience</i></span> &nbsp;&nbsp;
         
          <span>24x7</span> &nbsp;&nbsp;&nbsp;
		  
          <a href="admin.php" class="q"><span>Admin</span></a> &nbsp;&nbsp;
        
		<a href="login.php" class="q">Log In</a>
	
   </span>

<hr>

<span id="r">

<span id="s">

<form action="insert_home.php" method="post">

<input type="text" name="H" rows="3" cols="40" placeholder="Enter Destination(Country,State,City,etc)...">

<br><br>

<input type="date" name="I" rows="3" cols="40" placeholder="Select Start Date">

<br><br>

<input type="submit" Value="Start your trip" name="submit"class="btn" style="font-size:15px;color:white;">

</form>

</span>

<img src="images/download2.jpg" width=100% height=400px;>

</span>

<div id="a">

<marquee><i>Hurry!!Book for Your trip now to get high discount</marquee>

</div>

<hr>

<br>

<h2>About Trip Planner</h2>

<p id="b">

  &nbsp;&nbsp;&nbsp;&nbsp;Being a traveler you usually dream to travel for your soul,
  to improve your outlook towards life, and of course, to bring ultimate happiness.
 If this is the case then don't you think so that by making a little effort to plan it
 before time can actually turn the whole experience a rewarding one.
Now, if you are wondering that who all are going to help you in this regard, what all
 benefits can be enjoyed if we devote our precious time in planning the trip in advance.
 In short, you want to get rid of the epiphany of What am I doing here is particularly
 in the middle of your trip.
 In that case our role begins from here where our personal experience says that by keeping
 the under-mentioned points you just can't avoid last-minute travel.
 Rather will be able to relive all the memories even in the times to come...
 
 </p>
 
<h1>Get Inspired to travel</h1>

<br>

<center>

<span id="j">

<span id="n">Los Angeles</span>

<img id="x" src="images/download3.jpg" width=80% height=400px; >

</span>

</center>

<table cellspacing="120">

<tr>

<th id="c">Build a plan</th>

				<th id="d">Refine it</th>
				
				<th id="e">Book as a package</th>
				
				</tr>
				
				<tr>
				
				<td>
				
                <span id="f">
				
				Tell us where and when you<br/>want to go, we will build
				<br/>the best sightseeing itinerary
				
				</span>
				
				</td>
			    
				<td>
				
				<span id="g">
				
				You have complete flexibility on your destinations 
				and itinerary
				
				</span>
				
				</td>

              <td>
			  
			  <span id="h">
			  
			  Use our travel agents to get<br/>
			  package savings and hassle free booking
			  
			  </span>
			  
			  </td>
			  
				</tr>
				
				</table>
				
				<hr>
				
				<p id="m">
				
				&copy; 2019&nbsp;Trip Planner&reg;-All Rights Reserved
				<br>&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;
				<br>
				
				</p>

<script>

var a = document.getElementById("n");

var image = document.getElementById("x");

var ArrayImage = ["images/download3.jpg","images/download4.jpg","images/download5.jpg"];

var ArrayContent = ["Los Angeles","Sydney","South Africa"];

var index=1;

function changeImage()
{
	image.setAttribute("src",ArrayImage[index]);
	
	a.innerHTML = ArrayContent[index];
	
	index++;
	
	if(index >= ArrayImage.length)
		index = 0;
}

setInterval(changeImage,3000);

</script>

</body>

</html>