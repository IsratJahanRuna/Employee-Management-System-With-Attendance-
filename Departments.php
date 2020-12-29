<! DOCTYPE HTML>
<html lang = "en-US">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta charset="UTF-8">
	<title>Departments</title>
	<style type="text/css">
	table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align:center;
}
	</style>
	</head>
	<body>
	
	<div style="float:right;margin-top:20px;">
     <form action="" method="POST">
	 <input type="text" placeholder="Search with Department" name="searchterm" />
	 <input type="submit" name="searchbutton" value="Search" style="border:1ps solid #ddd;background:#819FF7;border-radius:8px;
	 color:white;padding:5px;"/>
	 </form>
    </div>
	
	<?php
	 require_once("connect.php");
	 
	 if(isset($_REQUEST["searchterm"])){
		 $searchTerm = $_REQUEST["searchterm"];
		 ?>
	<h2 style="text-align: center; padding-top:20px; margin-left:250px;">Departments</h2>

<table style="width:50%; margin: auto">
  <tr>
	<th>Department</th>
	<th>Posts</th>
    <th>Total Employees</th> 
  </tr>
  <?php
  
  
  $showDataQuery = "SELECT * FROM department WHERE Department LIKE '$searchTerm'";
  $runDataQuery = mysqli_query($connect,$showDataQuery);
  if($runDataQuery==true){
	   
	  while($mydata = mysqli_fetch_array($runDataQuery)){ ?>
	  
 <?php $department = "IT"; $matchQuery = "SELECT * FROM employe_details WHERE Department = '$department'";

    $runmatchQuery =  mysqli_query($connect,$matchQuery);
    $checkcount = mysqli_num_rows($runmatchQuery);
	if($runmatchQuery==true)
     {
	$count = $checkcount;}
	;?>
	<?php $department = "HR"; $matchQuery = "SELECT * FROM employe_details WHERE Department = '$department'";

    $runmatchQuery =  mysqli_query($connect,$matchQuery);
    $checkcount = mysqli_num_rows($runmatchQuery);
	if($runmatchQuery==true)
     {
	$count1 = $checkcount;}
	;?>
  <tr>
    
	<td><?php echo $mydata["Department"];?></td>
	<td><?php echo $mydata["Posts"];?></td>
	<td><?php if($mydata["Department"] == $department){echo $count;}
	else{echo $count1;}
	;?></td>
	
	
    
  </tr>
  <?php }} ?>
  <?php }
  
  else{
  ?>
  <h2 style="text-align: center; padding-top:20px; margin-left:250px;">Departments</h2>

<table style="width:50%; margin: auto">
  <tr>
	<th>Department</th>
	<th>Posts</th>
    <th>Total Employees</th> 
  </tr>
  <?php
  
  
  $showDataQuery = "SELECT * FROM department";
  $runDataQuery = mysqli_query($connect,$showDataQuery);
  if($runDataQuery==true){
	   
	  while($mydata = mysqli_fetch_array($runDataQuery)){ ?>
	  <?php $department = "IT"; $matchQuery = "SELECT * FROM employe_details WHERE Department = '$department'";

    $runmatchQuery =  mysqli_query($connect,$matchQuery);
    $checkcount = mysqli_num_rows($runmatchQuery);
	if($runmatchQuery==true)
     {
	$count = $checkcount;}
	;?>
	<?php $department = "HR"; $matchQuery = "SELECT * FROM employe_details WHERE Department = '$department'";

    $runmatchQuery =  mysqli_query($connect,$matchQuery);
    $checkcount = mysqli_num_rows($runmatchQuery);
	if($runmatchQuery==true)
     {
	$count1 = $checkcount;}
	;?>
  <tr>
    
	<td><?php echo $mydata["Department"];?></td>
	<td><?php echo $mydata["Posts"];?></td>
	<td><?php if($mydata["Department"] == $department){echo $count;}
	else{echo $count1;}
	;?></td>
	
    
  </tr>
  <?php }} ?>
  <?php } ?>
</table>
	</body>
</html>