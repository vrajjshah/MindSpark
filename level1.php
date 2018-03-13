<?php
include 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/psl-config.php';
 
sec_session_start();


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Protected Page</title>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
            <p>Welcome <?php echo htmlentities($_SESSION['teamname']); ?>!</p>
          
    <div class="container">
    <img class="img-fluid rounded" src="hr_title.png" alt="Card image"><br/><br/>
        <div class="card mx-auto" style="width:300px">
            <div class="card-body text-center">
                <form action="" method="POST">
                <h4 class="card-title">SOLVE THE CLUE</h4>
                <p class="card-text">Identify the manufacturer of the PRODUCT described in the audio.</p>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="answer">
                </div>
                <button class="btn btn-primary">SUBMIT</button>
                </form>
                <span style="color:red">NOTE:-Enter the answer in CAPITAL letters only!!!</span>
            </div>
        </div>
    </div>

<?php
    
    if(isset($_POST['answer']))
    {
        if($_POST['answer'] == 'SAMSUNG')
        {
               
               
              
               $insert_stmt = $mysqli->prepare("UPDATE members SET levels='2', date=CURRENT_TIMESTAMP WHERE teamname = ?" );
               $insert_stmt->bind_param('s', $_SESSION['teamname'] );
                $insert_stmt->execute();
                header("Location:level2.php");
          
           
        }
        else
        {
            echo "<script>alert('INCORRECT ANSWER...Please Try Again');</script>";
        }
    }
?>
            <p>Return to <a href="LOGIN.php">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>