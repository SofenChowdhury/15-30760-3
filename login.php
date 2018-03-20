<?php 
	require_once "include/header.php";
?>
<fieldset>
    <legend><b>LOGIN</b></legend>
    <form>
        <table>
            <tr>
                <td>User Name</td>
				<td>:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Password</td>
				<td>:</td>
                <td><input type="password"></td>
            </tr>
        </table>
        <hr />
		<input name="remember" type="checkbox">Remember Me
		<br/><br/>
        <input type="submit" value="Submit">        
		<a href="forgot_password.html">Forgot Password?</a>
    </form>
</fieldset>
<?php 
	require_once "include/footer.php";
?>