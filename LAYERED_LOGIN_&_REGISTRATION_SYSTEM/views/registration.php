<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <table width ="100%" border="1">
        <tr>

            <td align="center">
                <p align ="center"><b>ONLINE DOCTOR</b></p>

                <p align ="center"><i>get medical treatment from home</i></p>
                <p align="right"> <a href="about.html">about</a> | <a href="login.php">login</a> | <a href="contact.html">contact</a></p>
    
            </td>
        </tr>
        <tr>
            <td align="center">
                <form action="../php/registrationCheck.php" method="post">
                    <fieldset>

                        <legend>
                            registration
                        </legend>
                        <table>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td><input name="name" type="text"></td>
                                <td></td>
                            </tr>		
                            <tr><td colspan="4"><hr/></td></tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>
                                    <input name="email" type="email">
                                    <abbr title="hint: sample@example.com"><b>i</b></abbr>
                                </td>
                                <td></td>
                            </tr>		
                            <tr><td colspan="4"><hr/></td></tr>
                            <tr>
                                <td>User Name</td>
                                <td>:</td>
                                <td><input name="uname" type="text"></td>
                                <td></td>
                            </tr>		
                            <tr><td colspan="4"><hr/></td></tr>
                            <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td><input name="password" type="password"></td>
                                <td></td>
                            </tr>		
                            <tr><td colspan="4"><hr/></td></tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td>:</td>
                                <td><input name="cpassword" type="password"></td>
                                <td></td>
                            </tr>		
                            <tr><td colspan="4"><hr/></td></tr>
                            <tr>
                                <td colspan="3">
                                    <fieldset align = "center">
                                        <legend>Gender</legend>    
                                        <input name="gender" type="radio" value="Male">Male
                                        <input name="gender" type="radio" value="Female">Female
                                        <input name="gender" type="radio" value="Other">Other
                                    </fieldset>
                                </td>
                                <td></td>
                            </tr>		
                            <tr><td colspan="4"><hr/></td></tr>
                            <tr>
                                <td colspan="3">
                                    <fieldset align ="center">
                                         <legend>Date of Birth:</legend> 
                                         <input type="date"  name="dob" />
                                         
							             <!-- <input type="text" size="2" name ="month" />/
							             <input type="text" size="4" name = "year"/> -->
							             <i>(dd/mm/yyyy)</i>   
                
                                    </fieldset>
                                </td>
                                <td></td>
                            </tr>
                            
                           <tr><td colspan="4"><hr/></td></tr>
                                <tr>
                                <td colspan="3">
                                    <fieldset align ="center">
                                         <legend>User Type:</legend>  
                             <select name="user_type">
                                <option value="">Select User Type</option>
                
                                <option value="Doctor">Doctor</option>
                                <option value="Customer">Customer</option>
                                <option value="Intern">Intern</option>
                                
                             </select> <br>
                
                                    </fieldset>
                                </td>
                                <td></td>
                            </tr>

                            <tr><td colspan="4"><hr/></td></tr>

                            <tr>
                                <td align="center" colspan="3">
                                    <input name="submit" type="submit" value="submit" >
                                    <input type="reset">
    
    
                                </td>

                            </tr>
                            

                            <tr>


                            </tr>
                


                        </table>



                    </fieldset>



                </form>



            </td>



        </tr>


    </table>



</body>
</html>