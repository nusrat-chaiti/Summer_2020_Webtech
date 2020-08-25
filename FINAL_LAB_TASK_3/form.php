<?php


$bool=false;


    if(isset($_POST['submit']))
    {
         
        $name = $_POST['name'];
        
        $len = strlen($name);
        
        
        if($name == NULL || $len<2)
        {
            echo "name field can not be empty or less than 2 characters";

        }
        
        elseif($len >= 2 && $name[0]>='A' && $name[0]<='Z' || $name[0]>='a'&& $name[0]<='z'|| $name=='.' || $name=='-' )
        {
            
             $bool= TRUE;
                  
    
        }
        else 
        {
            echo"name cannot be special charecters, please enter valid name.";
        }
            
       
        
        // Email Validation-------------------------


        $email = $_POST['email'];
       

        if($email == NULL)
        {
            echo "email field can not be empty.";
        }
    
        else {

            $bool= TRUE;
        }
        

        // Gender Validation-----------------------------------------------------
        
        

        if(!isset($_POST['gender']))
        {
            echo "Invalid Gender! please select your gender";
        }
        else {
            $gender = $_POST['gender'];
            $bool= TRUE;
        }


        //DOB Validation---------------------------------

        $date = $_POST['date'];
        $month = $_POST['month'];
        $year = $_POST['year'];

        if($date == NULL || $month==NULL || $year== NULL)
        {
            echo "Empty Date of Birth!";
        }

        elseif(($date>=1 && $date<=31) && ($month >=1 && $month<=12) && ($year >=1900 && $year <=2016))
        {
            $bool= TRUE;
        }
        else {
            echo "Invalid Date of Birth!";
        }

        // Degree Validation----------------------------------------------

       
        
        
            if(!isset($_POST['degree']))
            {
                
                echo "Invalid Degree! PLEASE select your gender!! ";
            }
            else {
                $degree = $_POST['degree'];
                $bool= TRUE;
            }
        

        // Blood Group Validation----------------------------------------------------------------------
       
        if(!isset($_POST['blood']))
        {
            echo "please enter your Blood Group!";
        }
        else {
            $blood =$_POST['blood'];

            $bool= TRUE;
        }


        // Profile Picture validation--------------------------------------------------------

       

        if(!$_POST['file'])
        {
            echo "Invalid Profile!";
        }

        elseif ($_POST['file']) 
        {
        $file = $_POST['file'];

        $bool= TRUE;
    }

   }
   else 
   {
       echo "please fill up the form";
   }
  

?>