<?php
$myfile = fopen("file.txt", "w") or die("Unable to open file!");
$txt = "RISHA\n";
fwrite($myfile, $txt);
$txt ="RISHA\n";
fwrite($myfile, $txt);
fclose($myfile);
?>