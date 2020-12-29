<?php
require_once("connect.php");

if(isset($_REQUEST["editbutton"])){
	
$name = $_REQUEST["name"];
$department = $_REQUEST["department"];
$post = $_REQUEST["post"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$address = $_REQUEST["address"];
$editingID = $_REQUEST["editingID"];


$updateQuery = "UPDATE admin_details SET Name='$name',Department='$department',Post='$post',Email='$email',
Phone='$phone',Address='$address' WHERE ID = $editingID";

$runQuery = mysqli_query($connect,$updateQuery);

if($runQuery==true){
	header("location: Admin_Details.php?edited");
}
}
?>