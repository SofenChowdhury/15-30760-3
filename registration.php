<?php
	$firstname = $lastname = $name = $email = $gender = $password = $confirm = $uType = $cInfo = $check = "";
	$firstnameErr = $lastnameErr = $nameErr = $emailErr = $genderErr = $passErr = $confirmErr = $checkErr = $uTypeErr = ""; //setting empty vars to hold err msgs
	$inc = 9;
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	/*<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>*/
	if($_SERVER["REQUEST_METHOD"] == "POST"){   /*check whether the form has been submitted using $_SERVER["REQUEST_METHOD"].If the REQUEST_METHOD is POST, then the form has been submitted  											- and it should be validated. If it has not been submitted,skip the validation and display a blank form*/ 	
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$name = $_POST['name']; 
		$password =  $_POST['password'];
		$confirm =  $_POST['confirm'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$uType =  $_POST['uType'];
		$cInfo = $_POST['cInfo'];
		$submit = $_POST['submit'];
		$servername ="localhost";
		$username 	="root";
		$userpassword 	="";
		$dbname 	="php_db";
		$conn = mysqli_connect($servername, $username, $userpassword, $dbname);
		if(!$conn){
			die("Connection Error! ".mysqli_connect_error());
		}else{
			$sql = "insert into Register values ('".$firstname."','".$lastname."','".$name."','".$password."','".$email."','".$gender."','".$uType."','".$cInfo."')";
		}
		if(empty ($_POST["firstname"])){
			$firstnameErr = "Field required";
		}else{
			if (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
			  $firstnameErr = "Only letters allowed"; 
			}else{
				$firstname = test_input($_POST["firstname"]);// check if name only contains letters and whitespace
				$inc--;
			}
		}
		if(empty ($_POST["lastname"])){
			$lastnameErr = "Field required";
		}else{
			if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
			  $lastnameErr = "Only letters and white space allowed"; 
			}else{
				$lastname = test_input($_POST["lastname"]);// check if name only contains letters and whitespace
				$inc--;
			}
		}
		if(empty ($_POST["name"])){
			$nameErr = "Field required";
		}else{
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			  $nameErr = "Only letters and white space allowed"; 
			}else{
				$name = test_input($_POST["name"]);// check if name only contains letters and whitespace
				$inc--;
			}
		}
		if(empty ($_POST["password"])){
			$passErr = "Field required";
		}else{
			if (!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $password)){ //pass must contain numeric and letters both
				$passErr = "not secure enough";
			}else{
				$password = test_input($_POST["password"]);
				$inc--;
			}
		}
		if(empty ($_POST["confirm"])){
			$confirmErr = "Field required";
		}else{
			if($_POST["confirm"] != $_POST ["password"]){ //whether password matches or not
				$confirmErr = "password doesn't match";
			}else{
				$confirm = test_input($_POST["confirm"]);
				$inc--;
			}
		}
		if(empty ($_POST["email"])){
			$emailErr = "Field required";
		}else{
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // PHP's filter_var() function lets us check whether an email address is well-formed 
			{
			  $emailErr = "Invalid email format"; 
			}else{
				$email = test_input($_POST["email"]);
				$inc--;
			}
		}
		if(empty ($_POST["gender"])){
			$genderErr = "Field required";
		}else{
			$gender = test_input($_POST["gender"]);
			$inc--;
		}
		if(empty ($_POST["uType"])){
			$uTypeErr = "Field required";
		}else{
			$uType = test_input($_POST["uType"]);
			$inc--;
		}
		$cInfo = test_input($_POST["cInfo"]);
		if(empty ($_POST["check"])){
			$checkErr = "Field required";
		}else{
			$check = test_input($_POST["check"]);
			$inc--;
		}
		if($inc == 0){
			mysqli_query($conn,$sql);
		}else{
			echo "Database didn't insert value";
		}
	    mysqli_close($conn);
	}
?>
<html>
<title>Registration</title>
<head>
	<h1 align="center"><b>Registration Form</b></h1>
</head>
<body>
	<div>
	<form method="POST" action="">
		First_Name: <br>
			<input type="name" name="firstname" value="" placeholder="First_Name"/>
			<span class="error">* <?php echo $firstnameErr;?></span>						
			<br><br>
		Last_Name: <br>
			<input type="name" name="lastname" value="" placeholder="Last_Name"/>
			<span class="error">* <?php echo $lastnameErr;?></span>						
			<br><br>
		User_Name: <br>
			<input type="name" name="name" value="" placeholder="User_Name"/>
			<span class="error">* <?php echo $nameErr;?></span>							
			<br><br>
		Password:<br>
			<input type="password" name="password" value="" placeholder="*********"/>
			<span class="error">* <?php echo $passErr;?></span>	
			<br><br>
		Confirm_Password:<br>
			<input type="password" name="confirm" value="" placeholder="*********"/>
			<span class="error">* <?php echo $confirmErr;?></span>	
			<br><br>
		Email: <br>
			<input type="text" name="email" value="" placeholder="********@****.com" />
			<span class="error">* <?php echo $emailErr;?></span>	
			<br><br>
		Gender: <br>
			<input type="radio" name="gender" value="Female"/>Female
			<input type="radio" name="gender" value="Male"/>Male
			<input type="radio" name="gender" value="Others"/>Other
			<span class="error">* <?php echo $genderErr;?></span>	
			<br><br>
		User_Type:
			<select value="combo" name="uType" >
			<option value="----"></option>
			<option value="Instructor">Instructor</option>
			<option value="Student">Student</option>
			</select>
			<span class="error">* <?php echo $uTypeErr;?></span>
			<br><br>
		Contact_Info:<br>
			<textarea cols="48" rows="5" name="cInfo" placeholder="NOT MENDATORY"></textarea>
			<br><br>
			<input type="radio" name="check" value="checked" placeholder="" />Yes,I've read the <a href="terms and conditions.html">terms and conditions </a> and i agree
			<span class="error">* <?php echo $checkErr;?></span>	
			<br><br>
			<input type="submit" name="submit" value="submit"/>
	</form>
	</div>
</body>
</html>
