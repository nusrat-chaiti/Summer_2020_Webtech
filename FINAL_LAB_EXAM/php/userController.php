<?php 
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/userService.php');


	//add user
	if(isset($_POST['create'])){
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$conNum 		= $_POST['conNum'];

		if(empty($username) || empty($password) || empty($conNum)){
			header('location: ../views/register.php?error=null_value');
		}else{

			$user = [
			//	'id'=> $id,
				'username'=> $username,
				'password'=> $password,
				'conNum'=> $conNum
			];

			$status = insert($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/create.php?error=db_error');
			}
		}
	}

	//update user
	if(isset($_POST['edit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$conNum     = $_POST['conNum'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($conNum)){
			header('location: ../views/edit.php?id={$id}');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'conNum'=> $conNum,
				'id'=> $id
			];

			$status = update($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/edit.php?id={$id}');
			}
		}
	}
	//delete user

	if(isset($_POST['delete'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$conNum 		= $_POST['conNum'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($conNum)){
			header('location: ../views/edit.php?id={$id}');
		}
		else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'conNum'=> $conNum,
				'id'=> $id
			];

			$status = delete($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}
			else{
				header('location: ../views/edit.php?id={$id}');
			}
		}
	}

?>