<! DOCTYPE HTML>
<html lang = "en-US">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta charset="UTF-8">
	<title>Employee Details</title>
	<style type="text/css">
	table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align:center;
}
	</style>
	</head>
	<body>
	<h2 style="text-align: center; padding-top:20px;">Employee Details</h2>

<?php
if(isset($_REQUEST["edited"])){
	echo "Data has been edited";
}
?>
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Name</th>
	<th>Department</th>
    <th>Post</th>
    <th>Salary</th>	
    <th>Email</th>
	<th>Phone</th>
	<th>Action</th>
  </tr>
  <?php
  require_once("connect.php");
  if(isset($_COOKIE["currentuser"])){
	  $currenttarget = $_COOKIE["currentuser"];
  $showDataQuery = "SELECT ID,Name,employe_details.Department,employe_details.Post,Salary,Email,Phone FROM employe_details,salaries
  WHERE employe_details.Post=salaries.Post AND employe_details.Department=salaries.Department AND Email = '$currenttarget'";
  $runDataQuery = mysqli_query($connect,$showDataQuery);
  if($runDataQuery==true){
	   
	  while($mydata = mysqli_fetch_array($runDataQuery)){ ?>
  <tr>
    <td><?php echo $mydata["ID"];?></td>
    <td><?php echo $mydata["Name"];?></td>
	<td><?php echo $mydata["Department"];?></td>
	<td><?php echo $mydata["Post"];?></td>
	<td><?php echo $mydata["Salary"];?></td>
	<td><?php echo $mydata["Email"];?></td>
	<td><?php echo $mydata["Phone"];?></td>
	<td><a href="editdata.php?edit_id=<?php echo $mydata["ID"];?>">Edit</a></td>
	
    
  </tr>
  <?php }}} ?>
  
  
</table>
	</body>
</html>