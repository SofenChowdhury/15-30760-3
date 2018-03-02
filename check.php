<?php
	
	session_start();
	
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	
	if($name == "rakib" && $pass == "12"){
		$_SESSION["name"]= "rakib";
		
		header("Location: home.php");
	}else{

		header("Location: login.html");
	}
?>