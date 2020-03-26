<?php
$fName = $_GET["first_name"];
$lName = $_GET["last_name"];
$Name = $fName."_".$lName.".txt";
$myfile = fopen($Name,'a');
fwrite($myfile,"\n\n".implode(" \n",$_GET));
fclose($myfile);
echo('
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Record Registered</title>
</head>
<body>
    <h3>Contact Form Registration Success</h3>
    <p>'.$fName.', your Contact Records and Message Has been successfully Registered in the file <b>'.$Name.'</b></p>
    <p>Click to return to <a href="index.html">Contact Form</a> </p>
</body>
</html>
');
?>