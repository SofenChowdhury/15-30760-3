<?php
	session_start();
	if(isset($_SESSION["name"]) ){
?>

<h1>Welcome Home! <?=$_SESSION["name"]?></h1><a href="logout.php">logout</a>

<?php
	}else{
		echo "Please login first";
	}
?>