<?php

    if(isset($_POST['submit']))
    {
        
        if(!isset($_POST['blood']))
        {
            echo "please enter your Blood Group!";
        }
        else {
            $blood =$_POST['blood'];

            echo "Submit Successfully....";
        }
    }
?>