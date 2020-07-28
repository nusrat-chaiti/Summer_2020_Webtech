<?php
	session_start();

	if(isset($_POST['submit'])){


		if(empty( $_POST['uname']) && empty($_POST['password'])){
			echo "null submission";

		}else if( isset($_COOKIE['uname']) && isset($_COOKIE['password'])){
			
			if($_POST['uname'] == $_COOKIE['uname'] && $_POST['password'] == $_COOKIE['password']){
				setcookie('uname',$_SESSION['uname'],time()+3600,'/');
				setcookie('password',$_SESSION['password'],time()+3600,'/');
				setcookie('name',$_SESSION['name'],time()+3600,'/');
				setcookie('email',$_SESSION['email'],time()+3600,'/');
				setcookie('gender',$_SESSION['gender'],time()+3600,'/');
				setcookie('day',$_SESSION['day'],time()+3600,'/');
				setcookie('month',$_SESSION['month'],time()+3600,'/');
				setcookie('year',$_SESSION['year'],time()+3600,'/');
				

				setcookie('status', "OK", time()+3600, '/');
				header('location: dashboard.html');

			}else{
				echo "Invalid username/password";
			}
			
		}else{
			echo "Record not found!";
		}

	}else{
		echo"invalid";
	}


?>