<?php
echo"<center><h1>Entered Details</h1></center>";

echo"<center>Welcome ".$_POST["Name"]."<br></center>";
echo"<center>You are from ".$_POST["list"]." living in ".$_POST["address"]." with zip code ".$_POST["zip"]."<br></center>";
echo"<center>Your email id is ".$_POST["email"]."<br></center>";
echo"<center>Your preferred language is English <br></center>";
echo"<center>You are ".$_POST["g"]."<br></center>";
echo"<center>Your preferred user id is ".$_POST["id"]."</center>";

?>