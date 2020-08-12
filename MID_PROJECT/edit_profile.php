<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
</head>
<body>
    <table width="100%" border ="1">
        <tr>
            <td align="center">
                <p><b>ONLINE DOCTOR</b></p>
                <p align ="center"><i>get medical treatment from home</i></p>
                <p align="right"> <a href="doctor_dashboard.php">dashboard</a> | <a href="patient.html">patient</a> | <a href="edit_profile.php">edit profile picture</a>| <a href="view_profile.php">view profile</a>| <a href="logout.php">Logout</a></p>


            </td>
        </tr>
        <tr>
            <td align="center">
                <fieldset>
                    <legend><b>PROFILE PICTURE</b></legend>
                    <form action="view_profile.php" method="post" enctype="multipart/form-data">
                
                        
                        <br />
                        <input name = "picture" type="file">
                        <hr />
                        <input type="submit" name ="submit" >


                        
                        <?php
                        session_start();
                                  if (isset($_POST['submit']))
                                  {
                                    

                                    
                                  $dir_path="image/";
                                  $extension_array =array('jpeg','png','jpg');

                                  if(is_dir($dir_path))
                                  {

                                    $filedir = 'image/'.$_FILES['picture']['name'].'.jpg';
                                    //  $filedir = 'image/'.time()+53789872038338888.'.jpg';


                                  if(move_uploaded_file($_FILES['picture']['tmp_name'],$filedir))
                                  {
                                    echo '<img src="image/'.$_FILES["picture"]["name"].'" style="width:280px;height:210px;"  ><br/>'; 
                                    echo " your profile picture uploaded succesfully"; 

                                    
                                  } 
                                  else{
                                    echo "file is not uploaded";
                                  }
                                
                                  
                                 }
                                 setcookie('picture',$filedir, time()+367480000, '/');
                                 setcookie('status',"OK",time()+48900000,'/'); 
                                 header("location: view_profile.php");


                                  }
                            ?>
                                   
                                       <p align="center"> <a href="view_profile.php">view profile</a>   </p>
                                    

                    </form>
                </fieldset>

               <!-- <img src="image/doc-1.jpg" alt=" " style="width:280px;height:210px;" > -->
                <!-- <p><b>NAME:</b>DR. JOHN</p>
                <p><b>DEGREE:</b>Master of Medical Science (MMSc, MMedSc)</p>
                <p><b>WORK PLACE:</b>Massachusetts General Hospital</p>
                <p><b>ABOUT:</b>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
 -->


            </td>
        </tr>
    </table>
</body>
</html>