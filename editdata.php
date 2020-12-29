<! DOCTYPE HTML>
<html lang = "en-US">
<head>
<meta charset="UTF-8">
	<title>Edit Employee</title>
</head>
<body>
<?php

require_once("connect.php");

if(isset($_REQUEST["edit_id"])){
	
	$editID = $_REQUEST["edit_id"];

$selectInfo = "SELECT * FROM employe_details WHERE ID=$editID";
$runInfo = mysqli_query($connect,$selectInfo);

while($getData = mysqli_fetch_array($runInfo)){
 	
	?>
	<form action="Edit_core.php" method="POST">
	 <input type="text" name="name" value="<?php echo $getData["Name"]; ?>" placeholder="Name"/>
	 <input type="text" name= "department" value="<?php echo $getData["Department"]; ?>" placeholder="Department"/>
	 <input type="text" name= "post" value="<?php echo $getData["Post"]; ?>" placeholder="Position"/>
	 <input type="email" name= "email" value="<?php echo $getData["Email"]; ?>" placeholder="Email"/>
	 <input type="digit" name= "phone" value="<?php echo $getData["Phone"]; ?>" placeholder="Phone"/>
	 <input type="text" name= "address" value="<?php echo $getData["Address"]; ?>" placeholder="Address"/>
     <input type="hidden" name= "editingID"	value="<?php echo $editID;?>"
	</br>
	<input type="submit" name="editbutton" value="Update Data"/>
	</form>
<?php }} ?>

</body>
</html> 