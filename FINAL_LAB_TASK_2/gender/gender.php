
<?php

if(isset($_POST['submit']))
{
    if(!isset($_POST['gender']))
    {
        echo "Invalid Gender! please select your gender";
    }
    else {
        $gender = $_POST['gender'];
        echo "Successful Submission";
    }
}
?>