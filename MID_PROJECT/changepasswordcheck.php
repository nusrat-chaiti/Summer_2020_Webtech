<?php
	session_start();

    if(isset($_POST['submit']))
    {

		
		        $np 	= $_POST['np'];
        		$np1 	= $_POST['np1'];
        		$np2	= $_POST['np2'];


        

        if(empty($np) || empty($np1) ||  empty($np2) )
        {
			echo "null values in password field";

        }
        else 
        {
            include_once 'dbconnection.php';


					if($_POST['np1']==$_POST['np2'])
					{
						$result = mysqli_query($conn, "update `customer` SET `Password`='".$_POST['np1']."' WHERE username='".$_COOKIE['uname']."'");
						$_SESSION['np']=$_POST['np1'];
                        echo "Password changed! try to login with new password..";

                      //-------------------------------------

                      ?>
                         <!DOCTYPE html>
                                    <html lang="en">
                                    <head>
                                        <meta charset="UTF-8">
                                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                        <title>login</title>
                                    </head>
                                    <body>
                                        <table width = "100%" border ="1">
                                            <tr>
                                                <td>
                                                    <p align ="center"><b>ONLINE DOCTOR</b></p>

                                                <p align ="center"><i>get medical treatment from home</i></p>
                                                <p align="right"> <a href="about.html">about</a> | <a href="login.html">login</a> | <a href="contact.html">contact</a></p>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center">
                                                    <form action="login.php" method="POST">
                                            
                                                        <fieldset>
                                                            <legend>LOGIN</legend>
                                                        
                                                        <table>
                                                            <tr>
                                                                <td>User name :</td>
                                                                <td><input type="text" name="uname"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Password :</td>
                                                                <td><input type="password" name="password"></td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                
                                                                <td colspan="2"><hr/></td>
                                                                <td></td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                
                                                                <td ></td>
                                                                <td align="left"><input type="checkbox" name="rememberme" value="">remember me</td>
                                                            </tr>
                                                                
                                                
                                                            <tr>
                                                                
                                                                <td ></td>
                                                                <td align="left"><input type="submit" name="submit" value="Submit"> dont have an account? <a href="register.html">register</a></td>
                                                            </tr>
                                                        </table>
                                                        </fieldset>
                                                    </form>



                                                    


                                                </td>
                                            </tr>
                                        </table>
                                        
                                    </body>
                                    </html>


                        <!-- //--------------------------------- -->
                        <?php
                        
					}
					else
                    {	
                        echo "New Password And Retype New Password Must Need To Be Same!";
                    }

				
				

           
			
            
         }

    }
    else{
		header('location: change_password.html');
	   }


?>