<?php
    session_start();
	if(isset($_POST['submit']))
	{
		if($_POST['name'] != "" and $_POST['email'] != "" and $_POST['uname'] != "" and $_POST['password'] != "" and $_POST['cpassword'] != "" and $_POST['day'] != "" and $_POST['gender'] !="" and $_POST['month'] != "" and $_POST['year'] != "")
		{
			if($_POST['password'] == $_POST['cpassword'])
			{
				$_SESSION['uname']=$_POST['uname'];
                $_SESSION['password']=$_POST['password'];
                $_SESSION['name']=$_POST['name'];
				$_SESSION['email']=$_POST['email'];
				$_SESSION['gender']=$_POST['gender'];
				$_SESSION['day']=$_POST['day'];
				$_SESSION['month']=$_POST['month'];
				$_SESSION['year']=$_POST['year'];


				//-----------------------
				    setcookie('uname',$_SESSION['uname'],time()+3600,'/');
					setcookie('password',$_SESSION['password'],time()+3600,'/');
					setcookie('name',$_SESSION['name'],time()+3600,'/');
					setcookie('email',$_SESSION['email'],time()+3600,'/');
					setcookie('gender',$_SESSION['gender'],time()+3600,'/');
					setcookie('day',$_SESSION['day'],time()+3600,'/');
					setcookie('month',$_SESSION['month'],time()+3600,'/');
					setcookie('year',$_SESSION['year'],time()+3600,'/');
				//	setcookie('status',"set",time()+3600,'/');




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
