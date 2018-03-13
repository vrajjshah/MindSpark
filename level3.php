
<?php
include 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/psl-config.php';

sec_session_start();
//header("Location:redirect.php");

$stmt = $mysqli->prepare("SELECT levels FROM members WHERE teamname = ?");
               $stmt->bind_param('s', $_SESSION['teamname'] );
               $stmt->execute();
                $stmt->bind_result($level);
                $stmt->fetch();
                
                 $stmt->close(); 
if (login_check($mysqli) == false){
 header("Location:login.php");
}
else{
    onload($level);

}
 
                
 function onload($level)
{               
           
                if ($level < "3" ) {
                    
                  header("Location:errorquiz.php");
            }
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
       
            <p>Welcome <?php echo htmlentities($_SESSION['teamname']); ?>!

            </p>
          
    <div class="container">
    <img class="img-fluid rounded" src="hr_title.png" alt="Card image"><br/><br/>
        <div class="card mx-auto" style="width:300px">
            <div class="card-body text-center">
                <form action="" method="POST">
                <h4 class="card-title">SOLVE THE CLUE</h4>
                <p class="card-text">RIDDLE 2</p>
                
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
               
               
               $insert_stmt = $mysqli->prepare("UPDATE members SET levels='4', date=CURRENT_TIMESTAMP WHERE teamname = ?" );
               $insert_stmt->bind_param('s', $_SESSION['teamname'] );
                $insert_stmt->execute();
                header("Location:level3.php");
           // mysqli_query( $mysqli,$insert_stmt);
           
        }
        else
        {
            echo "<script>alert('INCORRECT ANSWER...Please Try Again');</script>";
        }
    }
?>
            <p>Return to <a href="LOGIN.php">login page</a></p>
        
    </body>
</html>