<?php 
session_start();
if(isset($_SESSION['username']))
{
	header("Location: index.php");
}

 ?>


<!DOCTYPE html>
<html>
<head>
	
	<title> LOGIN PANEL</title>
    <style>
body {background-color:powderblue;}
fieldset {align-content: center;
</style>
</head>
<body>

	<FORM action="validation.php" method="post" style="margin: auto;width: 30%;text-align: center;height: 250px;"><br><br><br><br><br>
		<fieldset>
			<legend style="text-align: center">LOGIN PANEL</legend>
		User name:<br>
        <input type="text" name="username"><br>
        User password:<br>
        <input type="password" name="password">
        <br><br>
        <input type="submit" align="center">
    </fieldset>
	</FORM>
	

</body>
</html>