<! DOCTYPE HTML>
<html lang = "en-US">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta charset="UTF-8">
	<title>Registration</title>
	<style type="text/css">
	body{background-image:url(bp.jpg); background-repeat:no-repeat; background-size:cover;}
	.new{width:350px; height:610px;margin:auto;}
	.new:hover{background: transparent; background:#00000087;}
	.in{padding:5px;}
	.in input{padding-top:10px; padding-bottom:10px;width:250px; margin-left: 50px;}
	.regtitle{text-align: center;padding-top: 30px;padding-bottom:20px;font-family:arial block;font-size: 30px;}
	</style>
	</head>
	<body>
	<a style="color:black; float:right; padding:15px; margin-top:30px;margin-right:20px;"href="Admin_Home.php">Go To Home</a>
	
	<div class="new">
	
	<div class="regtitle"><u><b>Registration Form</b></u></div>
	<b style="color:Green"><?php
	if(isset($_REQUEST['DONE_SIGNUP']))
	{
	echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	echo   $_REQUEST["DONE_SIGNUP"];
	}
	?></b>
	<form action="savedata_core.php" method="POST">
	<div class="in"><input type="text" name="name" placeholder="Name"/></div>
	<div class="in"><input type="text" name= "department" placeholder="Department"/></div>
	<div class="in"><input type="text" name= "post" placeholder="Position"/></div>
	<div class="in"><input type="text" name= "gender" placeholder="Gender"/></div>
	<div class="in"><input type="email" name= "email" placeholder="Email"/></div>
	<div class="in"><input type="digit" name= "phone" placeholder="Phone"/></div>
	<div class="in"><input type="text" name= "address" placeholder="Address"/></div>
	<div class="in"><input type="password" name= "password" placeholder="Password"/></div>
	<div class="in"><input type="date" name= "date" placeholder="Date"/></div>
	
	</br>
	<div class="in"><input type="submit" name="submitbutton" value="Register"/></div>
	</form>
	
	
	
	</div>
	</body>
</html>