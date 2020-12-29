<?php

require_once ("connect.php");
 
$name = htmlentities($_REQUEST["name"]);
$department = htmlentities($_REQUEST["department"]);
$post = htmlentities($_REQUEST["post"]);
$gender = htmlentities($_REQUEST["gender"]);
$email = htmlentities($_REQUEST["email"]);
$phone = htmlentities($_REQUEST["phone"]);
$address = htmlentities($_REQUEST["address"]);
$password = htmlentities($_REQUEST["password"]);
$encryptedpass = htmlentities(md5(sha1($password)));
$authtoken = htmlentities(md5(sha1($password.$email)));

$insertQuery= "INSERT INTO employe_details (Name,Department,Post,Gender,
Email,Phone,Address,Password,Authentication) VALUES ('$name','$department','$post',
'$gender','$email','$phone','$address','$encryptedpass','$authtoken')";

$runQuery= mysqli_query($connect,$insertQuery);

if($runQuery==true){
	header("location:NewEmployee.php?DONE_SIGNUP=Registration Successfull!");
}




	

 
 
?>
