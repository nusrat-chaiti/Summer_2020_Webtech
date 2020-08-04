<?php
    session_start();
	if(isset($_POST['submit']))
	{
		if($_POST['name'] != "" and $_POST['email'] != "" and $_POST['id'] != "" and $_POST['password'] != "" and $_POST['cpassword'] != "" and $_POST['utype']!= "")
		{
			if($_POST['password'] == $_POST['cpassword'])
			{
                $_SESSION['password']=$_POST['password'];
                $_SESSION['name']=$_POST['name'];
				$_SESSION['email']=$_POST['email'];
			
                $_SESSION['id']=$_POST['id'];
                $_SESSION['utype']=$_POST['utype'];




				//-----------------------
				
					setcookie('password',$_SESSION['password'],time()+3600,'/');
					setcookie('name',$_SESSION['name'],time()+3600,'/');
					setcookie('email',$_SESSION['email'],time()+3600,'/');
				




				//-----------------------------

				//echo"successful";
				header('location:Login.html');
			}
			else
			 {  echo" password didnt match";
				// header('location:registration.html');
			 }

		}
		else
			{// header('location:registration.html');
			echo"some informations are missing";
			}
	}
	else
	{	header('location:publicHome.html');
		//echo"utvajh";
	}

?>
