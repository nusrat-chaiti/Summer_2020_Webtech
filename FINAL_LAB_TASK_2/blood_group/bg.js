"use strict"



function Remover()
{
    document.getElementById("blood_Msg").innerHTML="";
}



function empty()
{ 
    var blood = document.getElementById("bloodgroup").value;

    if(blood== NULL)
    {
        document.getElementById("blood_Msg").innerHTML="please select blood group";
       
    }
    else
    {
        return true;
    }
}


function Validate()
{
    return true;
}