<?php
$link= mysqli_connect("localhost", "root", "", "L1F19BSSE0272");
if ($link->connect_error) 
{
  die("Connection failed: " . $link->connect_error);
//echo "connection failed";
}

$username=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["password"];
$coun=$_POST["Country"];

$q="INSERT INTO user(Name,email,pass,country)VALUES('$username','$email','$pass','$coun')";

if($link->query($q)==TRUE)
	header("location:signup-form.html");
else
	echo "error in creating account";
$link->close();
?>