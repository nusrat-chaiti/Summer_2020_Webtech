<?php
	require_once('../php/session_header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home for admin</title>
</head>
<body>
	<h1>Welcome Home!<?=$_SESSION['username']?></h1> 
	<a href="../views/create.php">Create New author</a> |
	<a href="../views/all_users.php">author List</a> |


	<a href="../php/logout.php">Logout</a> 
</body>
</html>