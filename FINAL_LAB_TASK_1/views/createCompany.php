<?php
	require_once('../php/session_header.php');
	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add company</title>
</head>
<body>

	<form action="../php/companyController.php" method="post">
		<fieldset>
			<legend>Create New Company</legend>
			<table>
			   <!-- <tr>
					<td>User id:</td>
					<td><input type="text" name="id"></td>
				</tr> -->
				<tr>
					<td>company name:</td>
					<td><input type="text" name="company_name"></td>
				</tr>
				<tr>
					<td>profile description:</td>
					<td><input type="text" name="profile_description"></td>
				</tr>
				<tr>
					<td>industry</td>
					<td><input type="text" name="industry"></td>
				</tr>
                <tr>
					<td>company_website</td>
					<td><input type="text" name="company_website"></td>
				</tr>
                <tr>
					<td>company_logo</td>
					<td><input type="file" name="company_logo"></td>
				</tr>
                <tr>
					<td>user account id:</td>
					<td><input type="text" name="user_account_id"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="create" value="Create"> 
						<a href="home.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>