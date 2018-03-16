    <?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title>Secure Login: Registration Form</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link rel="stylesheet" href="styles/main.css" />
        <style type="text/css">
          .reg_t{
            color: white;   
            
          }  

          table tr  td  div form tr td input{
            margin: 5px;
            padding: 10px; 
            width: 200px;
            border:0;
            height: 40px;
            box-shadow: 3px 3px 3px 1px rgba(0,0,0,0.3);
          }

        </style>
    </head>
    <body style="color: white; background-image:url('images.jpg'); background-repeat: no-repeat;background-size: cover;">
        <?php
            include("header.php");

        ?>
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <br>     
        <center>  <h1 style="text-shadow:3px 3px 3px rgba(0,0,0,0.3); ">Register with us</h1>  </center>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <table border=" 0   " width="100%;"> 
                <tr>    
                        <td width=" 50%;">    
                            <div class="instructions" >
        <ul>
            <li>teamnames may contain only digits, upper and lowercase letters and underscores</li>
            <li>Emails must have a valid email format</li>
            <li>Passwords must be at least 6 characters long</li>
            <li>Passwords must contain
                <ul>
                    <li>At least one uppercase letter (A..Z)</li>
                    <li>At least one lowercase letter (a..z)</li>
                    <li>At least one number (0..9)</li>
                </ul>
            </li>
            <li>Your password and confirmation must match exactly</li>
        </ul>
    </div>
                        </td>
                        </tr>
                        <tr>
                        <td>    
                            <div class="form"  >   
            <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" name="registration_form">
            <center>
            <table  class="reg_t" >
                <tr><td><input type='text' name='teamname' id='teamname' placeholder="Team Name"><br></td></tr>
                <tr><td><input type="text" name="email" id="email" placeholder="Email" /><br></td></tr>
                <tr><td><input type="password" name="password" id="password" placeholder="Password" /><br></td></tr>
                
                <tr><td><input type="password" name="confirmpwd" id="confirmpwd"  placeholder="Confirm Password" /><br></td></tr>
                <tr><td><input type="text" name="mobile" id="mobile"  placeholder="Mobile Number" /><br></td></tr>
                <tr><td><br><input type="button" value="Register" onclick="return regformhash(this.form,
                                   this.form.teamname,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd,
                                   this.form.mobile);" /></td></tr>
            </table>
            </center>
            
            
            
             

        </form>
    </div>
                        </td>
                </tr>
        </table>
        

     
        
        <p align="right">Return to the <a href="login.php">login page</a>.</p>
         <?php
            include("footer.php");

        ?>
    </body>
</html>