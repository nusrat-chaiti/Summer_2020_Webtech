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
            <td align="center" colspan="2">
                <p><b>ONLINE DOCTOR</b></p>
                <p align ="center"><i>get medical treatment from home</i></p>
                <p align="right"> <a href="doctor_dashboard.php">dashboard</a> | <a href="patient.html">patient</a> | <a href="edit_profile.php">edit profile picture</a>| <a href="view_profile.php">view profile</a>| <a href="logout.php">Logout</a></p>


            </td>
        </tr>
        <tr>
            <td align="center" colspan = "2">
                <p>ALL THE PATIENTS LIST:</p>
                <?php
                    $myfile = fopen("patient.txt", "r") or die("Unable to open file!");
                
                    while(!feof($myfile)) {
                    echo fgets($myfile) . "<br>";
                    }
                    fclose($myfile);
                    ?>


            </td>
            
        </tr>

       
        <tr >
            <td align="center" colspan="2">
                <p><i>copyright@ONLINE_DOCTOR(Nusrat Alam Chaiti)</i></p>
            </td>
        </tr>
    </table>
</body>
</html>