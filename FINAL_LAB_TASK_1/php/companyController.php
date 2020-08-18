<?php 
	//session_start();
	require_once('../php/session_header.php');
	require('../service/userService.php');


	//add user
	if(isset($_POST['create'])){
		$company_name 	        = $_POST['company_name'];
		$profile_description 	= $_POST['profile_description'];
        $industry 		        = $_POST['industry'];
        $company_website 		= $_POST['company_website'];
		$company_logo 		    = $_POST['company_logo'];
		$user_account_id 		= $_POST['user_account_id'];


		if(empty($company_name) || empty($profile_description) || empty($industry) || empty($company_website) || empty($company_logo) || empty($user_account_id)){
        //	header('location: ../views/register.php?error=null_value');
            echo"null values";
		}else{

			$user = [
			//	'id'=> $id,
				'company_name'=> $company_name,
				'profile_description'=> $profile_description,
                'industry'=> $industry,
                'company_website'=> $company_website,
				'company_logo'=> $company_logo,
				'user_account_id'=> $user_account_id

			];

			$status = insertCompany($user);

			if($status){
				header('location: ../views/company_information.php?success=done');
			}else{
				header('location: ../views/createCompany.php?error=db_error');
			}
		}
	}

	//update user
	if(isset($_POST['edit'])){

		$company_name 	        = $_POST['company_name'];
		$profile_description 	= $_POST['profile_description'];
        $industry 		        = $_POST['industry'];
        $company_website 		= $_POST['company_website'];
		$company_logo 		    = $_POST['company_logo'];
        $user_account_id 		= $_POST['user_account_id'];
        $id=$_POST['id'];

		if(empty($company_name) || empty($profile_description) || empty($industry) || empty($company_website) || empty($user_account_id)){
            //header('location: ../views/editCompany.php?id={$id}');
            echo"null values";
		}else{

			$user = [
                	'id'=> $id,
                    'company_name'=> $company_name,
                    'profile_description'=> $profile_description,
                    'industry'=> $industry,
                    'company_website'=> $company_website,
                    'company_logo'=> $company_logo,
                    'user_account_id'=> $user_account_id
    
                ];
    

			$status = updateCompany($user);

			if($status){
				header('location: ../views/company_information.php?success=done');
			}else{
				header('location: ../views/editCompany.php?id={$id}');
			}
		}
    }
    
	//delete user

	if(isset($_POST['delete'])){


        $company_name 	        = $_POST['company_name'];
		$profile_description 	= $_POST['profile_description'];
        $industry 		        = $_POST['industry'];
        $company_website 		= $_POST['company_website'];
		$company_logo 		    = $_POST['company_logo'];
        $user_account_id 		= $_POST['user_account_id'];
        $id=$_POST['id'];

		if(empty($company_name) || empty($profile_description) || empty($industry) || empty($company_website) || empty($user_account_id)){
			header('location: ../views/deleteCompany.php?id={$id}');
		}
		else{

			$user = [
				     'id'=> $id,
                    'company_name'=> $company_name,
                    'profile_description'=> $profile_description,
                    'industry'=> $industry,
                    'company_website'=> $company_website,
                    'company_logo'=> $company_logo,
                    'user_account_id'=> $user_account_id
			];

			$status = deleteCompany($user);

			if($status){
				header('location: ../views/company_information.php?success=done');
			}
			else{
				header('location: ../views/deleteCompany.php?id={$id}');
			}
		}
	}

?>