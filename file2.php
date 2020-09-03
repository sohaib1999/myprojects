<?php

function IsPrime($_POST["num"])
{
 for($x=2; $x<$_POST["num"]; $x++)
   {
      if($_POST["num"] %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = IsPrime($_POST["num"]);
if ($a==0)
echo 'This is not a Prime Number.....'."\n";
else
echo 'This is a Prime Number..'."\n";

}


 ?>