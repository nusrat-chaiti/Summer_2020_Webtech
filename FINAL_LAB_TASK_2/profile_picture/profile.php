<?php

    if(isset($_POST['submit']))
    {
        $id = $_POST['id'];

        if($id == NULL || !$_POST['file'])
        {
            echo "Invalid!......";
        }

        elseif ($_POST['file'] && $id > 0) 
        {
        $file = $_POST['file'];

        echo "Submit Successful!";
        }
        else{
            echo "Submit Successful!";

        }
    }
?>