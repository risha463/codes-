<?php
print_r("risha<br/>");
$arr=array(1=>"hello",2=>"hey",3=>"hii",4=>"fine",5=>"risha");
$s1=array_splice($arr,2,2,"true");
$ic=array_splice($arr,2);
print_r($s1);
print_r($ic);
?>
