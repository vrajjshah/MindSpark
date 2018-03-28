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
{               if ($level != "5" || $round != "3"  ) {
                    
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
                         <p class="card-text" > <h3>Do you know about TOWER OF HANOI ?<br> Well, You must.
No. of movements required for 10 disks ?

</h3>  </p>
 
                    
                         <form action="level5.php" method="POST">
               
                
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
        if(strtolower($_POST['answer']) == '1023')
        {
               
                // echo "<script>alert('Correct Answer');</script>";
            
               $insert_stmt = $mysqli->prepare("UPDATE members SET levels='6', date=CURRENT_TIMESTAMP WHERE teamname = ?" );
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