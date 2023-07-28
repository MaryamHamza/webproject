<?php
session_start();
$uemail=$_POST["email"];
$pass= $_POST["password"];

$link= new mysqli("localhost", "root", "", "L1F19BSSE0272") or die('unable to connect');

$q="SELECT * FROM users WHERE email='$uemail' and pass='$pass'";
$result= $link->query($q);
$row= $result->fetch_assoc();
if(is_array($row))
{
	$_SESSION["id"]= $row["id"];
	$_SESSION["u"]= $row["user_name"];
}
else
	echo "invalid Username and Password";

if(isset($_SESSION["u"]))
{
	header("location:form.php");
}
?>