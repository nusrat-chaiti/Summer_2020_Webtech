"use strict"


 
 function nempty()
 {
    var name = document.getElementById("name").value;
    var length =name.length;
    
    if(name == "")
    {  
        document.getElementById("name_Msg").innerHTML="name field can't be empty";
        
    }

    else if( (name>='A' && name<='Z' || name>='a'&& name<='z') && length< 2)
    {   
         document.getElementById("name_Msg").innerHTML=" Name length can't be less then 2";  
        
    }
    
    else if(name>= '0' && name<= '9'||name=='+'||name=='-'||name=='*'||name=='/'||name=='='||name=='@'||name=='$'||name=='%'||name=='!'||name=='|'||name=='?' )
    {
        document.getElementById("name_Msg").innerHTML="name must be characters not special characters. enter valid name";
        
    }
    
 
    else if( name>='A' && name<='Z' || name>='a'&& name<='z')
    {
        Validate();
        
    } 

    
 }
  
function nremover()
{
    document.getElementById('name_Msg').innerHTML = "";
    
}
//// email check


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

function eremover()
{
    document.getElementById("email_Msg").innerHTML="";
}

///validation of pass


function pempty()
{ 
    var password = document.getElementById("password").value;

    if(password=="")
    {
        document.getElementById("pass_Msg").innerHTML="password field can't be empty";

    }

    else
    {
         return true;
       
    }
}

function premover()
{
    document.getElementById("pass_Msg").innerHTML="";
}



 


function Validate()
{
   
      return true;
    
    
}
function f1()
{
    document.getElementsByTagName('a')[0].style.display = 'inline';
}