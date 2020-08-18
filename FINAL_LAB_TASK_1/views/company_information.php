
<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>company List</title>
</head>
<body>

	<a href="home.php">Back</a> |
	<a href="../php/logout.php">Logout</a> 
	
	<h3>company list</h3>

	<table border="1">
		<tr>
			<td>Id</td>
			<td>company name:</td>
			<td>profile_description:</td>
			<td>industry:</td>
			<td>company_website</td>
			<td>company_logo</td>
            <td>user_account_id</td>
            <td></td>

		</tr>

		<?php  
			$users = getAllCompany();
			for ($i=0; $i != count($users); $i++) {  ?>
		<tr>
			<td><?=$users[$i]['id']?></td>
			<td><?=$users[$i]['company_name']?></td>
			<td><?=$users[$i]['profile_description']?></td>
			<td><?=$users[$i]['industry']?></td>
			<td><?=$users[$i]['company_website']?></td>
            <td><?=$users[$i]['company_logo']?></td>
			<td><?=$users[$i]['user_account_id']?></td>

			<td>
				<a href="editCompany.php?id=<?=$users[$i]['id']?>">Edit</a> |
				<a href="deleteCompany.php?id=<?=$users[$i]['id']?>">Delete</a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>