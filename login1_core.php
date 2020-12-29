<?php
require_once("connect.php");

$userinput = $_REQUEST["uname1"];
$userpass = $_REQUEST["psw1"];

$matchQuery = "SELECT * FROM admin_details WHERE Email='$userinput' AND Password='$userpass'";

$runmatchQuery =  mysqli_query($connect,$matchQuery);
$checkcount = mysqli_num_rows($runmatchQuery);


if($runmatchQuery==true)
{
	if($checkcount==1)
	{
		setcookie("currentuser",$userinput,time()+(86400*1));
		header("location:Admin_Home.php");
	}
	else
	{
		header("location:Login1.php?wrong_info");
	
	}
	
}
else
	{
		header("location:Login1.php?wrong_info");
	
	}
?>