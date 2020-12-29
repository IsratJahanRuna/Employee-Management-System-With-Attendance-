 <! DOCTYPE HTML>
<html lang = "en-US">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta charset="UTF-8">
	<title>Employee List</title>
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
	 <input type="text" placeholder="Search with Name" name="searchterm" />
	 <input type="submit" name="searchbutton" value="Search" style="border:1ps solid #ddd;background:#819FF7;border-radius:8px;
	 color:white;padding:5px;"/>
	 </form>
    </div>	 
	 
	
	 
	 <?php
	 require_once("connect.php");
	 
	 if(isset($_REQUEST["searchterm"])){
		 $searchTerm = $_REQUEST["searchterm"];
		 ?>
		 	 <h2 style="text-align: center; padding-top:20px; margin-left:150px;">Employee List</h2>
		 <table style="width:100%">
  <tr>
    <th>Name</th>
	<th>Department</th>
    <th>Post</th> 
    <th>Email</th>
	<th>Phone</th>
	
  </tr>
  <?php
  
  $showDataQuery = "SELECT * FROM employe_details WHERE Name LIKE '%$searchTerm%'";
  $runDataQuery = mysqli_query($connect,$showDataQuery);
  if($runDataQuery==true){
	  while($mydata = mysqli_fetch_array($runDataQuery)){ ?>
	  
  <tr>
    <td><?php echo $mydata["Name"];?></td>
	<td><?php echo $mydata["Department"];?></td>
	<td><?php echo $mydata["Post"];?></td>
	<td><?php echo $mydata["Email"];?></td>
	<td><?php echo $mydata["Phone"];?></td>
	
    
  </tr>
  <?php }} ?>
  
</table>
	
	<?php }

 
else{
?>
 <h2 style="text-align: center; padding-top:20px; margin-left:150px;">Employee List</h2>
		 <table style="width:100%">
  <tr>
    <th>Name</th>
	<th>Department</th>
    <th>Post</th> 
    <th>Email</th>
	<th>Phone</th>
	
  </tr>
  <?php
  
  $showDataQuery = "SELECT * FROM employe_details ";
  $runDataQuery = mysqli_query($connect,$showDataQuery);
  if($runDataQuery==true){
	  while($mydata = mysqli_fetch_array($runDataQuery)){ ?>
	  
  <tr>
    <td><?php echo $mydata["Name"];?></td>
	<td><?php echo $mydata["Department"];?></td>
	<td><?php echo $mydata["Post"];?></td>
	<td><?php echo $mydata["Email"];?></td>
	<td><?php echo $mydata["Phone"];?></td>
	
    
  </tr>
  <?php }} ?>
  
</table>
	
	<?php } ?>

	</body>
</html>