<?php
	session_start();
	$name = $password = $check="";
	$nameErr = $passwordErr = $checkErr=""; //setting empty vars to hold err msgs
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST['name'];
		$password = $_POST['password'];
		$check = $_POST["check"];
		$servername = "localhost";
		$username = "root";
		$userpassword = "";
		$dbname	= "php_db";
		
		$conn = mysqli_connect($servername, $username, $userpassword, $dbname);
		if(!$conn){
			die("Connection Error!".mysqli_connect_error());
		}
		$sql = "select * from register where name ='".$name."'AND password='".$password."'";
			//$sql2 = "select * from register  where name ='".$name."'";
	    $myCommand = mysqli_query($conn, $sql);
		//$dr = $myCommand.ExecuteReader();
		if(empty ($_POST["name"])){
			$nameErr = "Field required";
		}else{
			if(mysqli_query($conn, $sql)){
				//$last_name = mysqli_insert_name($conn);
				$name = test_input($_POST["name"]);
				$_SESSION["name"]= $_POST["name"];
				header("Location: home.php");
			}else{
				header("Location: login.php");
			}    
		}
		
		if(empty ($_POST["password"])){
			$passwordErr = "Field required";
		}else{
			if(mysqli_query($conn,$sql)){
				$password = test_input($_POST["password"]);
			}else{
				echo "Wrong password";
			}    
		}
		if(empty ($_POST["check"])){
			$checkErr = "Field required";
		}else{
			$check = test_input($_POST["check"]);
		}
		mysqli_close($conn);
	}
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>

<fieldset>
    <legend><b>LOGIN</b></legend>
    <form action="" method="POST">
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>User Name</td>
				<td>:</td>
                <td><input type="name" name="name" placeholder="User_Name"/><span class="error">* <?php echo $nameErr;?></span></td>
            </tr>
			
            <tr>
                <td>Password</td>
				<td>:</td>
                <td><input type="password" name="password" placeholder="Password"/><span class="error">* <?php echo $passwordErr;?></span></td>		
            </tr>
			
        </table>
        <hr/>
		<input name="remember" type="checkbox" value="">Remember Me
		<span class="error">* <?php echo $checkErr;?></span>
		<br/><br/>
        <input type="submit" name="submit" value="Submit">        
		<a href="forgot_password.html">Forgot Password?</a>
    </form>
</fieldset>