<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$user = getByCompanyId($_GET['id']);	
	}else{
		header('location: company_information.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>delete company</title>
</head>
<body>

	<form action="../php/companyController.php" method="post">
		<fieldset>
			<legend>delete company info</legend>
			<table>
            <tr>
					<td>company name:</td>
					<td><input type="text" name="company_name" value="<?=$user['company_name']?>"></td>
				</tr>
				<tr>
					<td>profile description:</td>
					<td><input type="text" name="profile_description" value="<?=$user['profile_description']?>"></td>
				</tr>
				<tr>
					<td>industry</td>
					<td><input type="text" name="industry" value="<?=$user['industry']?>"></td>
				</tr>
                <tr>
					<td>company_website</td>
					<td><input type="text" name="company_website" value="<?=$user['company_website']?>"></td>
				</tr>
                <tr>
					<td>company_logo</td>
					<td><input type="file" name="company_logo" value="<?=$user['company_logo']?>"></td>
				</tr>
                <tr>
					<td>user account id:</td>
					<td><input type="text" name="user_account_id" value="<?=$user['user_account_id']?> "></td>
				</tr>
				<tr>
                <td></td>
					<td>
						<input type="hidden" name="id" value="<?=$user['id']?>">
						<input type="submit" name="delete" value="delete"> 
						<a href="company_information.php">Back</a>
					</td>
				</tr>


                
			</table>
		</fieldset>
	</form>
</body>
</html>