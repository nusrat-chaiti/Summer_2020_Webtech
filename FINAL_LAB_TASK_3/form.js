"use strict"


 
 function empty()
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

    //--------------email--------------


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

    //-------------gender------------

    
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
        document.getElementById("gender_Msg").innerHTML="please select your gender...";
       
    }

    //-------------------------dob---------

    
    var date = document.getElementById("date").value;
    var month = document.getElementById("month").value;
    var year = document.getElementById("year").value;
    
    if(date ==null|| month==null||year==null)
    {  
        document.getElementById("dob_msg").innerHTML=" date field can't be empty";
        
    }

    else if((date>=1 && date<=31) && (month >=1 && month<=12) && (year >=1900 && year <=2016))
    {   
         
         return true;
        
    }
    
 
    else 
    {
        document.getElementById("dob_msg").innerHTML="enter valid date. sample:(dd: 0-31, mm: 1-12, yyyy: 1900-2016)";  
    } 


    //-------------------bg----------

    
    var blood = document.getElementById("bloodgroup").value;

    if(blood== NULL)
    {
        document.getElementById("blood_Msg").innerHTML="please select blood group";
       
    }
    else
    {
        return true;
    }

    //---------------------degree---------

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

    //-----------------photo-------------
    var picture = document.getElementById("file").value;

    if(picture=="")
    {
        document.getElementById("picture_Msg").innerHTML="picture can't be empty , please select any picture.";
        
    }
    else
    {
        
        return true;
    }

    
 }
  
function Remover()
{
    document.getElementById('name_Msg').innerHTML = "";
    document.getElementById("email_Msg").innerHTML="";
    document.getElementById("gender_Msg").innerHTML = "";
    document.getElementById("dob_msg").innerHTML = "";
    document.getElementById("blood_Msg").innerHTML="";
    document.getElementById("degree_Msg").innerHTML="";
    document.getElementById("picture_Msg").innerHTML="";





    
}

 


function Validate()
{
   
      return true;
    
    
}