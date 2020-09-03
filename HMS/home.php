<!DOCTYPE html>

<html>

<head>

<title>Online Medical Facility</title>

<meta charset="utf-8">

<meta name="description"
 content="An Online Medical service for doctor consultation purpose 
 and for providing other medical services to customers">

<meta name="keywords" content="medicine,doctor,health,consultation,advices,free,online">

<meta name="viewport" content="width = device-width, initial-scale=1">

<meta name="http-equiv" content=""

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
 integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" 
 crossorigin="anonymous">

<script>

function notification()
{
	alert("we want to send you notifications");
}
setTimeout(notification,9000);

</script>


<style>

a{
text-decoration:none;
color:skyblue;
}
	
#i{
font-size:30px;
font-family:font-awesome;
color:#35AABC;
}

#q{
color:skyblue;
}
	#j{
		position: relative;
  text-align: center;
  color: black;
  cursor:pointer;
	}
	
	#n{
  position: absolute;
  top: .1%;
  left: 50%;
 transform: translate(-50%, -160%);
  font-size:40px;
	}
	
	#k{
	position: relative;
  text-align: center;
  color: white;
  cursor:pointer;
	}
	
	#o{
	position: absolute;
  top: .1%;
  left: 50%;
 transform: translate(-50%, -230%);
  font-size:40px;
	}
	
	#l{
		position: relative;
  text-align: center;
  color: black;
  cursor:pointer;
	}
	
	#p{
	position: absolute;
  top: .1%;
  left: 50%;
 transform: translate(-50%, -390%);
  font-size:40px;
	}
	
	#m{
		background-color:black;
		color:white;
		padding:20px 16px;
	}
	
	#r{
	position: relative;
  text-align: center;
  color: white;
	}
	
	#s{
	position: absolute;
  top: .1%;
  left: 50%;
 transform: translate(-50%, -390%);
  font-size:40px;
	}
	
	#a{
background-color:green;
font-size:20px;
color:white;
     }
	 
  #para{
	text-transform:justify;
	font-size:20px;;
    }

#j:hover{
	opacity: 0.9;
}

#k:hover{
	opacity: 0.9;
}

#l:hover{
	opacity: 0.9;
}

#r:hover{
	opacity: 0.9;
}

</style>

<script>

var a = document.getElementById("s");

var image = document.getElementById("y");

var ArrayImage = ["i11.jpg","i13.jpg","i14.jpg"];

var ArrayContent = ["Find trusted medical advice from 1,50,000 top doctors","",""];

var index=1;

function changeImage()
{
	image.setAttribute("src",ArrayImage[index]);
	
	a.innerHTML = ArrayContent[index];
	
	index++;
	
	if(index >= ArrayImage.length)
		index = 0;

}

setInterval(changeImage,4000);

</script>

</head>

<body>
<nav class="navbar navabar-expand-sm bg-dark navbar-dark fixed-top">

<a href="#" class="navbar-brand">Medify.Com</a>

<button class="navbar-toggle" data-toggle="collapse" data-target="#items">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse text-right" id="items">

<ul class="navbar-nav">

<li class="nav-item"><a href="#">Refer & Earn</a></li>

<li class="nav-item"><a href="#">Earn Upto Rs 7000</a> </li>

<li class="nav-item"> <a href="ask.php">Ask a Question</a></li>

<li class="nav-item"> <a href="ask.php"> <a href="https://play.google.com/store">Get the App</a></a></li>

<li class="nav-item"><a href="#">24 &times; 7 </a></li>

<li class="nav-item"><a href="admin.php">Admin</a> </li>

<li class="nav-item"><a href="login.php" id="q">Log In</a> </li>

</ul>


</div>

</nav>

<hr>

<span id="r">

<span id="s">Find trusted medical advice from 1,50,000 top doctors</span>

<img id="y" src="images/i11.jpg" width=100% height=400px;></span>

<br>

<div id="a">

<marquee><i>Hurry up!! now to get high discount</marquee>

</div>

<hr>

<h1>About Medify</h1>


<blockquote id="para">

Are you looking for a simple way to get the best medical care available?
 Medify.com innovative online doctor database gives you access to over 150,000 highly trained 
 medical experts. So you can ask a doctor anything you want, simple with a touch of a finger.
 You can save as much as 70% of your time and money at your next visit to the doctor 
 and with the assurance that the medical professional you are seeing is highly trained 
 and experienced. We use a stringent verification process to ensure you are 100% satisfied 
 every time. Subscribe to the Medify Online Doctor network today to get the very best access
 to free questions, consultations and easy appointments. Join today!
 
 <br>

Looking to ask a doctor questions about your health online? Medify offers a fast, easy and 
friendly way to gain access to general practitioners, dieticians, nutritionists, 
gynaecologists, psychologist, dermatologist,ayurveda, homeopathy and more. 
You can get in touch with online doctors 24 hours a day, 7 days a week with this
 simple application. No matter what your condition, Medify can get you in touch with a doctor
 online straight away. To find out more, subscribe to our ask a doctor service online
 or download the app and get access to doctors on the go!

<br>

Not only does Medify give you access to online medical professionals, we also have regular
 blogs from respected experts that give you tips and advice on health and well being.
 Our doctors discuss a range of topics from everyday living, parenting, pregnancy 
 and how to manage your conditions, all online and accessible from your computer,
 phone or tablet. Simply download the app and get access to free questions, consultations
 and easy appointments. Get your health feed now with Medify and ask a doctor what you've
 always wanted to know!</blockquote></p>
 
 <br>
 
 <span id="j">
 
 <span id="n">Doctors On The Way</span>
 
 <img src="images/i1.jpg" width=33% height=400px; >
 
 </span>
 
<span id="k">

<span id="o">Get Hospitals</span>

<img  src="images/i12.jpg" width=33% height=400px;>

</span>

<span id="l">

<span id="p">Advices</span>

<img  src="images/i16.jpg" width=33% height=400px;>

</span>

<hr>
		
<p id="m">&copy; 2019&nbsp;Medify&reg;-All Rights Reserved<br>&nbsp;&nbsp;&nbsp;
<br>&nbsp;&nbsp;&nbsp;<br></p>


</body>

</html>