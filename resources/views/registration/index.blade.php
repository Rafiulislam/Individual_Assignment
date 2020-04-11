<!DOCTYPE html>

<html>
<head>
    <title>Registration</title>
</head>
<body>
    
<table width="80%" align="center" cellspacing="0" cellpadding="10" border="1">
    <tr>
        <td valign="middle" align="center" height="70">  
                
            <div  height="48" align="centre" ><i>WElCOME To !!! FTP SERVER</i></div>
                    
        </td>
    </tr>
    <tr>
        <td align="center">

<form method="post" align="left" action="registration">
<fieldset align="middle" class="field_set">
            <legend>REGISTRATION(Admin or Moderator)</legend>
            
        <br>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Full Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :

        <input type="text" name="name" placeholder="Enter your name"><br><br>

        Father's name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :

        <input type="text" name="fathername" placeholder="Enter your father's name"><br><br>

        Mother's name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :

        <input type="text" name="mothername" placeholder="Enter your mother's name"><br><br>

        Password    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:

        <input type="password" name="password" placeholder="Enter a password"><br><br>

        Confirm Password &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:
        <input type="password" name="cpassword" placeholder="Confirm password"><br><br>

        Email   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:

        <input type="text" name="email" placeholder="Enter a mail address"><br><br>
        Date of Birth &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :

        <input type="text" name="dob" placeholder="dd-mm-yyyy"><br><br>


        Address          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:

        <input type="text" name="address" placeholder="Enter Your address"><br><br>

        Select Type :&nbsp&nbsp&nbsp&nbsp&nbsp

                <select name="type">

                        <option value="teacher">Moderator</option>
                        <option value="student">Premium User</option>
                        <option value="Admin">Admin</option>

                </select>

      
                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 

                   Select your Image:
                   <input type="file" name="image"><br><br>


         Gender &nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp 

                 <input type="radio" name="gender" value="male">Male &nbsp &nbsp
                 <input type="radio" name="gender" value="female">Female &nbsp &nbsp 
                 <input type="radio" name="gender" value="other">Other <br><br>

                 
        
        <input type="submit" name="submit" align="left" value="Register"><br><br> Already have an account ?<a href="login">Login Here</a>

        
        </fieldset>
    </form>
    </td>
    </tr>
    <tr>
        <td align="center">
            Copyright &copy; 2020 (Rafi)
        </td>
    </tr>
</table>
</body>
</html>