<?php
function checkName()
{
	
  if($SERVER["REQUEST_METHOD"]=="post")
  {
    $pname=$_POST['name'];
    if($pname == "" || strlen($pname) < 2 ||ctype_digit($sname[0]) )
    {
      echo"Name is not valid, enter valid name.";
    }

  }
  
}
function checkEmail()
{
	if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $mail=$_POST['email'];
    if($mail==" ")
    {
      echo "email field can not be empty";
    }
  }
}






?>
    
 <html>
<head>
  <title>profile</title>
</head>
<body>
  <table width="100%" border="1">
    <form method="POST">
    <!--row-1-->

     <tr height="80px">
      <td colspan="3" align="center">
        PERSON PROFILE

      </td>
     </tr>

    <!--row-2-->

     <tr height="50px">
      <td width="130px" align="center">
        Name:
      </td>
      <td width="400px" align="center">
        <input type="text" name="textfield" size="50px"><?php checkName();?> <br/>
      </td>
      <td width="90px"></td>

     </tr>

    <!--row-3-->

     <tr height="50px">
      <td width="130px" align="center">
        Email:
      </td>
      <td width="400px" align="center">
        <input type="Email" name="mailfield" size="50px"><?php checkEmail(); ?> <br/>
      </td>
      <td width="90px"></td>
     </tr>
    <!--row-4-->

     <tr height="50px">
      <td width="130px" align="center">
        Gender:
      </td>
      <td width="400px" align="center">
        <input type="radio" name="gender">male
        <input type="radio" name="gender">female
        <input type="radio" name="gender">other
        <?php checkGender(); ?> <br/>
      </td>
      <td width="90px"> </td>
     </tr>
    <!--row-5-->

     <tr height="50px">
      <td width="130px" align="center">
        Date Of Birth:
      </td>
      <td width="400px" align="center">
        <input type="number" name="" size="5px ">/ 
        <input type="text" name="" size="5px ">/ 
        <input type="number" name="" size=" 5px"> 
        <i>(dd/mm/yyyy)</i>

        <?php dateOfBirth(); ?> <br/>
      </td>
      <td width="90px"> </td>

     </tr>
    <!--row-6-->

     <tr height="50px">
      <td width="130px" align="center">
        Blood Group:
      </td>
      <td width="400px" align="center">
        <select name="bg">
          <option>A+</option>
          <option>B+</option>
          <option>AB+</option>
          <option>O+</option>
          <option>A-</option>
          <option>B-</option>
          <option>AB-</option>
          <option>O-</option>
          
        </select>
        <?php bloodGroup(); ?> <br/>
      </td>
      <td width="90px"> </td>

     </tr>
    <!--row-7-->

     <tr height="50px">
      <td width="130px" align="center">
        Degree:
      </td>
      <td width="400px" align="center">
        <input type="checkbox" name="">SSC
        <input type="checkbox" name="">HSC
        <input type="checkbox" name="">BSc
        <input type="checkbox" name="">MSc
        <?php checkDegree(); ?> <br/>
      </td>
      <td width="90px"> </td>
     </tr>

    <!--row-8-->

     <tr height="50px">
      <td width="130px" align="center">
        Photo:
      </td>
      <td colspan="2" width="400px" align="center">
        <input type="file" name="picFile" size="">
        <?php checkPhoto(); ?> <br/>
      </td>
      
      
     </tr>
    <!--row-9-->

     <tr height="50px">
      <td colspan="3" align="center">
        

      </td>
     </tr>

    <!--row-10-->

     <tr height="50px">
      <td colspan="3" align="right">
        <input type="submit" name="submitBtn" value="submit">
        <input type="reset" name="resetBtn" value="reset">

        

      </td>
     </tr>

    </form>


  </table>
</body>
</html> 