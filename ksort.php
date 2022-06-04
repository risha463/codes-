<?php
echo"risha<br>";
$arr=array("Peter"=>"35","Ben"=>"37","joe"=>"43");
ksort($arr);
foreach($arr as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>