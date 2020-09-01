
<!DOCTYPE html>
<html>
<head>
     <script type="text/javascript" src="../assets/register.js"></script>
	<title>SignUp</title>
</head>
<body>

	<form action="#" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="name"  onkeyup="nremover()" onblur="nempty()" ><b><i id="name_Msg"></i></b></td>
				</tr>
                <tr>
					<td>Email</td>
					<td><input type="text" name="email" onkeyup="eremover()" onblur="empty()"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" onkeyup="premover()" onblur="pempty()"></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="button" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>