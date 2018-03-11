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
            background-color: red;
          }  

        </style>
    </head>
    <body>
        <?php
            include("header.php");

        ?>
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <br>     
        <center>  <h1>Register with us</h1>  </center>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <table border=" 1" width="100%;"> 
                <tr>    
                        <td width=" 50%;">    
                            <div class="instructions" >
        <ul>
            <li>Usernames may contain only digits, upper and lowercase letters and underscores</li>
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

                        <td>    
                            <div class="form"  >   
            <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" name="registration_form">
            <table border="1" class="reg_t">
                <tr><td><input type='text' name='username' id='username' placeholder="Username" /><br></td></tr>
                <tr><td><input type="text" name="email" id="email" placeholder="Email" /><br></td></tr>
                <tr><td><input type="password" name="password" id="password" placeholder="Password" /><br></td></tr>
                <tr><td><input type="password" name="confirmpwd" id="confirmpwd"  placeholder="Confirm Password" /><br></td></tr>
                <tr><td><input type="button" value="Register" onclick="return regformhash(this.form,this.form.username,this.form.email,this.form.password,this.form.confirmpwd);" /></td></tr>
            </table>
            
            
            
            
             
        </form>
    </div>
                        </td>
                </tr>
        </table>
        

     
        
        <p>Return to the <a href="index.php">login page</a>.</p>
         <?php
            include("footer.php");

        ?>
    </body>
</html>