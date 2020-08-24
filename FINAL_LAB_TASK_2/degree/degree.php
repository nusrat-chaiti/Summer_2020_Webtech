<?php

    if(isset($_POST['submit']))
    {
        if(!isset($_POST['degree']))
        {
            
            echo "Invalid Degree! PLEASE select your gender!! ";
        }
        else {
            $degree = $_POST['degree'];
            echo "Submit Successful!";
        }
  
    }
?>