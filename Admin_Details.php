<! DOCTYPE HTML>
<html lang = "en-US">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta charset="UTF-8">
	<title>Admin Details</title>
	<style type="text/css">
	table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align:center;
}
	</style>
	</head>
	<body>
	<h2 style="text-align: center; padding-top:20px;">Admin Details</h2>
<?php
if(isset($_REQUEST["edited"])){
	echo "Data has been Edited!";
}
?>
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Name</th>
	<th>Department</th>
    <th>Post</th> 
	<th>Salary</th> 
	<th>Gender</th>
    <th>Email</th>
	<th>Phone</th>
	<th>Address</th>
	<th>Action</th>
  </tr>
  <?php
  require_once("connect.php");
  if(isset($_COOKIE["currentuser"])){
	  $currenttarget = $_COOKIE["currentuser"];
  $showDataQuery = "SELECT * FROM admin_details WHERE Email = '$currenttarget'";
  $runDataQuery = mysqli_query($connect,$showDataQuery);
  if($runDataQuery==true){
	  while($mydata = mysqli_fetch_array($runDataQuery)){ ?>
	  
  <tr>
    <td><?php echo $mydata["ID"];?></td>
    <td><?php echo $mydata["Name"];?></td>
	<td><?php echo $mydata["Department"];?></td>
	<td><?php echo $mydata["Post"];?></td>
	<td><?php echo $mydata["Salary"];?></td>
	<td><?php echo $mydata["Gender"];?></td>
	<td><?php echo $mydata["Email"];?></td>
	<td><?php echo $mydata["Phone"];?></td>
	<td><?php echo $mydata["Address"];?></td>
	<td><a href="editdata1.php?edit_id=<?php echo $mydata["ID"];?>">Edit</a> </td>
	
    
  </tr>
  <?php }}} ?>
  
</table>
<a style="color:black; float:right; padding:15px; margin-top:30px;margin-right:20px;"href="Admin_Home.php">Go To Home</a>
	</body>
</html>