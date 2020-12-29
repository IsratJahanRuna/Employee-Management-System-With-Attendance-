<?php
setcookie("currentuser",$userinput,time()-(86400*10));
		header("location:Login.php");

?>