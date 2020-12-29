<?php
$dbuser="Israt";
$dbpass="1234";
$inputuser=htmlspecialchars($_REQUEST["uname"]);
$inputpass=$_REQUEST["psw"];

if($dbuser == $inputuser && $dbpass == $inputpass)
{
	header("location:home page.html");
}


?>