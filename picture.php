<?php 
	require_once "include/headerN.php";
?>
<?php 
	require_once "include/accounts.php";
?>
<fieldset>
    <legend><b>PROFILE PICTURE</b></legend>
    <form>
        <img width="128" src="../image/user.png" />
        <br />
        <input type="file">
        <hr />
        <input type="submit" value="Submit">
    </form>
</fieldset>
<?php 
	require_once "include/footerN.php";
?>