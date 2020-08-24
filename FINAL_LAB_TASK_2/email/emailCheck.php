<?php

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];

    if($email == NULL)
    {
        echo "email field can not be empty.";
    }

    else {
        echo "email is submitted";
    }
    }
    else
    {
        header('location:email.html');
    }
?>