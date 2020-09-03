function validate()
{
var result=true;
var i=document.getElementsByTagName("input");
if(i[0].value!="sohaib"  || i[1].value!="123")
{
result=false;
alert("Username or Password is not valid");
}
return(result);
}
