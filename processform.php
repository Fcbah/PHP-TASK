<?php
$fName = $_GET["first_name"];
$lName = $_GET["last_name"];
$Name = $fName."".$lName.".txt";
$myfile = fopen($Name, 'w');
fwrite($myfile,implode(" \n",$_GET));
fclose($myfile);
print_r($_GET);
?>