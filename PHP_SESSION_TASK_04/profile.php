
<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
</head>
<body>
	<table width="100%" border="1">
		<form>
			<!-- <fieldset> -->
				<tr>
				 <td><p>X-Company</p></td>
				 <td>
					<p align="right"> <a href="profile.html">your profile</a>|<a href="logout.php">logout</a></p>
				 </td>
				</tr>
				<tr>
					<td >
                        Account
					<hr/>
					<ul>
						<li><a href="dashboard.html">Dashboard</a></li>
						<li><a href="profile.php">View Profile</a></li>
						<li><a href="editprofile.html">Edit Profile</a></li>
						<li><a href="changeprofilepicture.html">Change Profile Picture</a></li>
						<li><a href="changepassword.html">Change Password</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
                    </td>
                    
                    <td>
                                


                        
                        <fieldset>
                            <legend><b>PROFILE</b></legend>
                            <form>
                                <br/>
                                <table cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>Name</td>
                                        <td>:</td>
                                        <td>
                                            <?php
                                            echo $_COOKIE['name'];
                                            ?>
                                        </td>
                                        <td rowspan="7" align="center">
                                            <img width="128" src="../image/user.png"/>
                                            <br/>
                                            <a href="../write/picture.html">Change</a>
                                        </td>
                                    </tr>		
                                    <tr><td colspan="3"><hr/></td></tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td><?php
                                            echo $_COOKIE['email'];
                                            ?></td>
                                    </tr>		
                                    <tr><td colspan="3"><hr/></td></tr>			
                                    <tr>
                                        <td>Gender</td>
                                        <td>:</td>
                                        <td><?php
                                            echo $_COOKIE['gender'];
                                            ?></td>
                                    </tr>
                                    <tr><td colspan="3"><hr/></td></tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td>:</td>
                                        <td>
                                            <?php echo $_COOKIE['day']."/".$_COOKIE['month']."/".$_COOKIE['year']; ?></td>
                                    </tr>
                                </table>	
                                <hr/>
                                <a href="profile.php">Edit Profile</a>	
                            </form>
                        </fieldset>
                    </td>
					
				</tr>
				<tr>
					<td colspan="2">
						<p align="center">Copyright © 2017 </p>
	
					</td>
					
				</tr>
			
			
			
			
			<!-- </fieldset>	 -->
	
	
	
		</form>


	</table>
	
	
</body>
</html>










