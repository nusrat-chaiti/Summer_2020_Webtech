<?php
	session_start();

	if(isset($_POST['submit'])){


		if(empty( $_POST['id']) && empty($_POST['password'])){
			echo "null submission";

		}else if( isset($_COOKIE['id']) && isset($_COOKIE['password'])){
			
			if($_POST['id'] == $_COOKIE['id'] && $_POST['password'] == $_COOKIE['password']){
				setcookie('id',$_SESSION['id'],time()+3600,'/');
				setcookie('password',$_SESSION['password'],time()+3600,'/');
				setcookie('name',$_SESSION['name'],time()+3600,'/');
                setcookie('email',$_SESSION['email'],time()+3600,'/');
                setcookie('utype',$_SESSION['utype'],time()+3600,'/');

			
				

                setcookie('status', "OK", time()+3600, '/');
                if ('utype'=="user")
                {
                    header('location: user.html');
                }
                else
                {
                    header('location: admin.html');
                }
			//	header('location: dashboard.html');

			}else{
				echo "Invalid username/password";
			}
			
		}else{
            $file = fopen('user.txt', 'a');
			fwrite($file, $uname.'|'.$password.'|'.$email."/r/n");
			fclose($file);

			echo "Record not found!";
		}

	}else{
		echo"invalid";
	}


?>