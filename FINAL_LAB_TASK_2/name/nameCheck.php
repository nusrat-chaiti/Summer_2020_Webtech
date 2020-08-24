<?php
  
   
   if(isset($_POST['submit']))
   {    
    $name = $_POST['name'];
    $len = strlen($name);
    
    if($name == NULL || $len <2)
    {
        echo "name field can not be empty or less than 2 characters";
    }
 
    elseif($len >= 2 && $name[0]>='A' && $name[0]<='Z' || $name[0]>='a'&& $name[0]<='z'|| $name=='.' || $name=='-' )
    {
        
         echo"submited your name successfully";
              

    }
    else 
    {
        echo"name cannot be special charecters, please enter valid name.";
    }
        
    

}

   ?>