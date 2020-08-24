
"use strict"




function Remover()
{
    document.getElementById("genderMsg").innerHTML="";
}


function empty()
{ 
    if(document.getElementById("Male").checked)
    {
        return true;
    }
    else if(document.getElementById("Female").checked)
    { 
        return true;

    }
    else if(document.getElementById("Other").checked)
    {
        return true;

    }
    else
    {
        document.getElementById("genderMsg").innerHTML="please select your gender...";
       
    }
}


function Validate()
{
    
    
        return true;
    
}   