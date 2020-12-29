<! DOCTYPE HTML>
<html lang = "en-US">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta charset="UTF-8">
	<title>Login</title>
	<style type="text/css">
	*{margin: 0; padding: 0;}
	body{background: #819FF7; width:100%;}
	.login{background:white; padding:20px;margin:auto;text-align:center; width:350px; height:20px;border:1px solid black;margin-top:50px; margin-bottom:30px}
	.formcontainer{background-color:white;padding:50px; margin:auto;width:300px;height:150px;border: 2px solid black;}
	.container{font-family: arial black;}
	.buttond input{background: #819FF7; width:100%; text-align:center;padding:8px;height:30px;border:none; color:white;}
	.buttond input:hover{background:transparent;color:#0363FB;}
	.full:hover{background:transparent; transform:translateY(-10px);}
	.login h1:hover{background:transparent;color:#0363FB;transform:translateY(-10px);}
	</style>
	
	</head>
	<body>
	
	<form action="Login_core.php" method="POST">
	<div class="full">
	  <div class="login">
      <h1>Login Form</h1>
	  
	  </div>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Username</strong></label>
        <input type="text" placeholder="Enter Username" name="uname" style="padding:5px;" required><br/><br/>
        <label for="psw"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="psw" style="padding:5px;" required><br/><br/>
      </div>
	  <div class="buttond">
      <input type="submit" value="LOGIN"><br/><br/>
	  </div>
      <br/>
		<?php
		if(isset($_REQUEST["wrong_info"]))
		{
			echo '<b style="color:red; font-size:15px">
			Username or Password is Wrong!
			</b>';	
		}
		?>
		</br>
		
      
	  </div>
    </form>
	</body>
	</html>