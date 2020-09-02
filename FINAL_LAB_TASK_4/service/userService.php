<?php
	require('../db/db.php');

	function getByID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users where id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getByCompanyId($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from company where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}





	function getAllUser(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}


	function validate($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		if(count($user) > 0 ){
			return true;
		}else{
			return false;
		}
	}


	function insert($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into users values('', '{$user['username']}','{$user['password']}', '{$user['email']}', 'admin')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	
	function insertCompany($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}
        //=======================================
            
			// 	$dir_path="image/";
			// 	$extension_array =array('jpeg','png','jpg');

			// 	if(is_dir($dir_path))
			// 	{

			// 	$filedir = 'image/'.$_FILES['company_logo']['name'];
			// 	if(move_uploaded_file($_FILES['company_logo']['tmp_name'],$filedir))
			// 	{
			// 	//  echo '<img src="image/'.$_FILES["picture"]["name"].'" style="width:280px;height:210px;"  ><br/>'; 
			// 	echo " your logo uploaded succesfully"; 

				
			// 	} 
			// 	else{
			// 	echo "file is not uploaded";
			// 	}
			// }

          //==========================================

		$sql = "insert into company values('', '{$user['company_name']}','{$user['profile_description']}', '{$user['industry']}', '{$user['company_website']}', '{$user['company_logo']}', '{$user['user_account_id']}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function update($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


        //update company
		function updateCompany($user){
			$conn = dbConnection();
			if(!$conn){
				echo "DB connection error";
			}

			$sql = " UPDATE company SET company_name ='{$user['company_name']}', profile_description ='{$user['profile_description']}', industry ='{$user['industry']}', company_website ='{$user['company_website']}', company_logo ='{$user['company_logo']}', user_account_id='{$user['user_account_id']}' WHERE id='{$user['id']}'";

			if(mysqli_query($conn, $sql)){
				return true;
			}else{
				return false;
			}
		}






	function delete($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "DELETE FROM `users` WHERE id={$user['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}




	function deleteCompany($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "DELETE FROM `company` WHERE id={$user['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	
	function getAllCompany(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from company";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}

    function checkEmail($email)
	{
		$conn = dbConnection();
		$sql = "select * from users where email='{$email}'";
		if(mysqli_query($conn, $sql)){
			$result=mysqli_query($conn, $sql);
			$user = mysqli_fetch_assoc($result);
			if(empty($user)){
			return false;
			}
			else
			{
				return true;
			}
		}else{
			return false;
		}

	}


?>