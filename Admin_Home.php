<! DOCTYPE HTML>
<html lang = "en-US">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta charset="UTF-8">
	<title>Admin</title>
	<style type="text/css">
	*{margin: 0; padding: 0;}
	body{background-image:url(374296.jpg); background-repeat:no-repeat; background-size:cover;}
	.admin{float: left;
       
  overflow: hidden;
  background-color: white;
  padding:20px;
  width:200px;
  height:100px;
  margin-left: 600px;
  margin-top: 80px;
  border: 1px solid black;
 
  }
  .admin:hover{background: transparent; color: white; cursor: pointer; transform:translateY(-10px); border: 1px solid white;}
  li a:hover{color: white;}
  li a{color:black;}
  .ficon{font-size:40px; text-align: center; margin: auto;}
  .ftext{text-align: center;font-size: 30px; padding: 5px;list-style-type: none; }
   </style>
	</head>
	<body>
	
	<div class="admin">
<div class="ficon">
<i class="fas fa-registered"></i>
</div>
<div class="ftext">
<li><a href="NewEmployee.php">Registration</a></li>
</div>
</div>
<div class="admin" style="margin-top: 50px;">
<div class="ficon">
<i class="fas fa-info-circle"></i>
</div>
<div class="ftext">
<li><a href="Admin_Details.php">Details</a></li>
</div>
</div>
<div class="admin" style="margin-top: 50px;">
<div class="ficon">
<i class="fas fa-table"></i>
</div>
<div class="ftext">
<li><a href="Employee_Admin.php"> Employee Details</a></li>
</div>
</div>
  <?php if(isset($_COOKIE["currentuser"])){
	  echo '<a style="margin-left:400px; color: white;margin-top:30px;" href="logout1_core.php">Logout</a>';
	  
  }
  ?>
	</body>
</html>