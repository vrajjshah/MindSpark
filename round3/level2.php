<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
$stmt = $mysqli->prepare("SELECT levels,hint,hintvalue FROM members WHERE teamname = ?");
               $stmt->bind_param('s', $_SESSION['teamname'] );
               $stmt->execute();
                $stmt->bind_result($level,$hint,$hintvalue);
                $stmt->fetch();
                

                $stmt->close(); 
               $stmt = $mysqli->prepare("SELECT round FROM round WHERE id = '0'");
             $stmt->execute();
                $stmt->bind_result($round);
                $stmt->fetch();
            $stmt->close();
 
               // echo $level;
               // echo $hint;
if (login_check($mysqli) == false){
 header("Location:../loginerror.php");
}
else{
    onload($level,$round);

}
 
                
 function onload($level,$round)
{               if ($level != "2" || $round != "3"  ) {
                    
                  header("Location:redirect.php");
              }
}


?>
<?php 
                include("head.php")
         ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
            

        
                
                    <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
       
<<main>
        
        <div class="container-fluid text-center">

            <!--Card-->
            <div class="card card-cascade wider reverse my-4 pb-5">

                <!--Card image-->
                <div class="view overlay rgba-white-slight wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <!-- <img src="2/img%2520135.jpg" class="img-fluid">
 -->                    
                        <div class="mask waves-effect waves-light"></div>
                    </a>
                </div>
           
                <!--/Card image-->

                <!--Card content-->
                <div class="card-body text-center wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                    <!--Title-->
                         <h4 class="card-title">SOLVE THE RIDDLE</h4>
                         <p class="card-text" > <h3>In file compression (ZIP files), we generally use special type of bits to represent a character.<br>
Those special type of bits are formally known as PREFIX CODES.<br>
Here we have 5 characters in file, and their frequency are,<br>
Character A occurs 50 times, B occurs 5 times, C occurs 30 times, D occurs 15 times and E occurs 20 times. <br>
You’re given five prefix codes, they are 0,10,111,1100,1101. You have to choose appropriate prefix code for each character.<br>
Your task is to find out number of bits required to store character E. 
<br>

</h3>  </p>
 
                    
                         <form action="level2.php" method="POST">
               
                
                        <div class="form-group">
                        <input type="text" class="form-control" name="answer" style="width: 50%;margin: 0 auto;">
                         </div>
                         <button class="btn btn-primary btn-lg waves-effect waves-light">SUBMIT</button>
                         </form>
                         
                        
                
                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->
        
        </div>
        
    </main>
    <?php
    
    if(isset($_POST['answer']))
    {
        if(strtolower($_POST['answer']) == '60')
        {
               
                // echo "<script>alert('Correct Answer');</script>";
            
               $insert_stmt = $mysqli->prepare("UPDATE members SET levels='3', date=CURRENT_TIMESTAMP WHERE teamname = ?" );
               $insert_stmt->bind_param('s', $_SESSION['teamname'] );
                $insert_stmt->execute();
                $insert_stmt->close();
                echo " <script>window.location.replace('redirect.php');</script>";
                
                
          
           
        }
        else
        {
            echo "<script>alert('INCORRECT ANSWER...Please Try Again');</script>";
        }
    }
?>
<?php 
                include("foot.php")
         ?>