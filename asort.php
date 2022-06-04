<?php
$age=array("Peter"=>"35","Ben"=>"37","joe"=>"43");
asort($age);
$id=array("risha"=>"10","swati"=>"5","aayushi"=>"25");
asort($id);

foreach($id as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>