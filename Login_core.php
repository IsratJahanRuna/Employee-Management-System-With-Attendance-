<?php
require_once("connect.php");

$userinput = $_REQUEST["uname"];
$userpass = $_REQUEST["psw"];
$authtoken = md5(sha1($userpass.$userinput));

$matchQuery = "SELECT * FROM employe_details WHERE Authentication='$authtoken' ";

$runmatchQuery =  mysqli_query($connect,$matchQuery);
$checkcount = mysqli_num_rows($runmatchQuery);


if($runmatchQuery==true)
{
	if($checkcount==1)
	{
		setcookie("currentuser",$userinput,time()+(86400*1));
		header("location:Employee_Home.php");
	}
	else
	{
		header("location:Login.php?wrong_info");
	
	}
	
}
else
	{
		header("location:Login.php?wrong_info");
	
	}
?>