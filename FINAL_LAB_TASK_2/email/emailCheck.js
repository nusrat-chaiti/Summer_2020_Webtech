"use strict"


function empty()
{
    var email = document.getElementById("email").value;
   

    if(email=="")
    {
       document.getElementById("email_Msg").innerHTML=" email field can't be empty";
    }
    
    else
    {
        var count=0;
		for( i=0 ; i < email.length ; i++)
		{
			if(email[i]=='@')
			{
				count++;
			}
			else
				continue;
		}
		if(count==1)
		{
			var at_the_ret = email.split("@");
			var dot = at_the_ret[1].split(".");
			var last;
			for( i=0 ; i < dot.length ; i++)
			{
				last = dot[i];
			}
			if( last == "com" || last == "edu"|| last=="org")
			{
				return true;
			}
			else
			{
                document.getElementById("email_Msg").innerHTML=" enter valid email";

			}
        }
        else
        {
            document.getElementById("email_Msg").innerHTML=" enter valid email";

        }
    }
}

function Remover()
{
    document.getElementById("email_Msg").innerHTML="";
}

function Validate()
{
    
        return true;
   
}