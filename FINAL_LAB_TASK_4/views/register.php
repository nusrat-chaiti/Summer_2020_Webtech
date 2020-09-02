
<?php

if (isset($_GET['error'])) {
	
	if($_GET['error'] == 'db_error'){
		echo "Something went wrong...please try again";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
     <script type="text/javascript" src="../assets/register.js"></script>
	<title>SignUp</title>
</head>
<body>

	<form action="../php/regCheck.php" onsubmit="return Validate()"  method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="name" id="name" onkeyup="nremover()" onblur="nempty()" >
                    <b><i id="name_Msg"></i></b><br>

                    </td>
				</tr>
                <tr>
					<td>Email</td>
					<td><input type="text" id="email" name="email"  onkeyup="eremover()" onblur="empty()">
                    
                    <b><i id="email_Msg"></i></b><br>
                    </td>

				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id = "password" name="password" onkeyup="premover()" onblur="pempty()">
                    <b><i id="pass_Msg"></i></b><br>

                    </td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit" onclick="f1()" >
                    <a href="login.php" style="display: none">login</a>
                   </td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>