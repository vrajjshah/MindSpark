<?php
include 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/psl-config.php';
 
sec_session_start();
$stmt = $mysqli->prepare("SELECT levels,hint,hintvalue FROM members WHERE teamname = ?");
               $stmt->bind_param('s', $_SESSION['teamname'] );
               $stmt->execute();
                $stmt->bind_result($level,$hint,$hintvalue);
                $stmt->fetch();
                

                $stmt->close(); 
               // echo $level;
               // echo $hint;
if (login_check($mysqli) == false){
 header("Location:login.php");
}
else{
    onload($level);

}
 
                
 function onload($level)
{               if ($level != "1" ) {
                    
                  header("Location:redirect.php");
              }
}

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['hint']))
    {
        hintvaluecheck($hintvalue,$hint);
        //echo $hintvalue;
    }
    

    function hintvaluecheck($hintvalue,$hint)
    {   if ($hint=="0") {
        echo "<script>alert('No hints left');</script>";
        # code...
    }

        else if ($hintvalue=="1") {

            echo "<script>alert('Hint here');</script>";
            # code...
        }
        else{
            //echo $hint;
            dechint($hint);
        }
    }

    function dechint($hint)
    {   include 'includes/db_connect.php';
        include_once 'includes/functions.php';
include_once 'includes/psl-config.php';
        $hint=$hint-1;
        $stmt = $mysqli->prepare("UPDATE members set hint='$hint',hintvalue='1' WHERE teamname = ?");
               $stmt->bind_param('s', $_SESSION['teamname'] );
               $stmt->execute();
                $stmt->close(); 
       echo "<script>alert('Hint here');</script>";
    }
   
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
                <form action="level1.php" method="post">
   
    <button name="hint" value="GO"> Show Hint</button>
</form>
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