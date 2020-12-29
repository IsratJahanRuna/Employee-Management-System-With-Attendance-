<?php
require_once("connect.php");

$userinput = $_REQUEST["uname"];
$userpass = $_REQUEST["psw"];
$authtoken = md5(sha1($userpass.$userinput));
$currentDateTime = date('Y-m-d H:i:s');

$matchQuery = "SELECT * FROM employe_details WHERE Authentication='$authtoken' ";

$runmatchQuery =  mysqli_query($connect,$matchQuery);
$checkcount = mysqli_num_rows($runmatchQuery);


if($runmatchQuery==true)
{
	if($checkcount==1)
	{
		
      
		setcookie("currentuser",$userinput,time()+300);
		header("location:home page.html");
	}
	
	else
	{
		header("location:attendance.php?wrong_info");
	
	}
	
}

?>