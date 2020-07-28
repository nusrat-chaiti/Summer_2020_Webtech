<?php
	session_start();

	if(isset($_POST['submit'])){

		
		        $np 	= $_POST['np'];
        		$np1 	= $_POST['np1'];
        		$np2	= $_POST['np2'];


        

		if(empty($np) || empty($pnp1) ||  empty($np2) ){
			echo "null values in password field";

		}else if(isset($_COOKIE['password'])){
			
			if($np == $_COOKIE['password']){
				

				setcookie('status', "OK", time()+3600, '/');
				header('location: change_password.html');

			}else{
				echo "password not valid";
			}
			
		}else{
			echo "Not found!";
		}

	}else{
		header('location: change_password.html');
	}


?>