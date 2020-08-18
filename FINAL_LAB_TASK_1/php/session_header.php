<?php
	session_start();

	if(!isset($_SESSION['username'])){
		header('location: ../views/login.php?error=invalid_request');
	}
	
	// if(!isset($_SESSION['company_name'])){
	// 	header('location: ../views/createCompany.php');
	// }
?>