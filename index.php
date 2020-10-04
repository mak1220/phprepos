<?php
   require "mylib.php"
?>

<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
   

  <h1>
   <?php

    echo "Welcome to first web page using PHP code";

   ?>
   </h1>

   <?php

    /*
    $x = 40;
    $y = 67;

    $result = $x + $y;

    echo "The addition of ".$x." and ".$y." is = ".$result."<br>";

    echo "$x,$y,$result"."<br>";
    echo $x,$y,$result;
    echo "<br>";
    echo "The value of x is ". $x;
    print "The value of x is ". $x;

    $cars = array("Toyota","Mercedes","Nissan","City","Honda","BMW");

    echo "<br>I like the ",$cars[3]." and ".$cars[1];

    echo "<br>Total cars in the list is ",count($cars);

    $length = count($cars);

    for ($index=0; $index<$length; $index++)
    {
    	echo $cars[$index];
    	echo "<br>";
    }
    */
    $carspeed = array("bMW"=>"380","0Mercedes"=>"450","mehran"=>"180","Nissan"=>"480","Civic"=>"280","Honda"=>"185");

    echo $carspeed["Mercedes"]."<br>";

    ksort($carspeed);

    
    
    foreach($carspeed as $carname=>$speed)
    {
      
        echo "the speed of ".$carname." is ".$speed."<br>";
      
    }

    
    echo "<br>The sum of the 45 and 78 is ".sum(45,78);
    echo "<br>The Product of the 45 and 20 is ".Multiply(45,20);
    echo "<br>The Remainder of the 45 and 20 is ".Remainder(45,20);

    echo "<br>".date("d/m/yy");
    echo "<br>".date("d/m/yy",strtotime("-1 days"));
    echo "<br>".date("l,F m,Y",strtotime("-5 days"));

    
 //   echo "<br>the Multiplication of 23 and 56 is ". Multiply(23,56);



    
   ?>
   <br>
   This is the Advanced web technology class 
   



</body>
</html>