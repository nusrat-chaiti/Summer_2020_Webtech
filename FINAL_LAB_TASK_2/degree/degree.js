"use strict"


function empty()
{ 
    if(document.getElementById("SSC").checked)
    {
        return true;
    }
    else if(document.getElementById("HSC").checked)
    { 
        return true;
    }
    else if(document.getElementById("BSc").checked)
    {
        return true;
    }
    else
    {
        document.getElementById("degree_Msg").innerHTML="please choose your degree";
        return false;
       
    }
}

function Remover()
{
    document.getElementById("degree_Msg").innerHTML="";
}


function Validate()
{
        return true;
   
}