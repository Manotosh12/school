<?php

$name=$_POST["fname"];
$email=$_POST["email"];
$mobile=$_POST["phone"];


echo("Your name is ".$name." email is ".$email." & mobile is ".$mobile);
$connection=mysqli_connect("localhost","id16762490_ms","pX+2ctp$q=mw!ynf","id16762490_manotosh");
$insert="INSERT INTO th250521 SET name='$name', email='$email', mobile='$mobile'";
$connection->query($insert);

?>