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
{               if ($level != "20" || $round != "3"  ) {
                    
                  header("Location:redirect.php");
              }
}

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['hint']))
    {
        hintvaluecheck($hintvalue,$hint);
        //echo $hintvalue;
    }
    

    function hintvaluecheck($hintvalue,$hint)
    {   
         if ($hintvalue=="12") {

            echo "<script>alert('among TIME magazine’s list of the 100 Most Influential People in the World');</script>";
            # code...
        }
        else if ($hint=="0") {
        echo "<script>alert('No hints left');</script>";
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
        $stmt = $mysqli->prepare("UPDATE members set hint='$hint',hintvalue='12' WHERE teamname = ?");
               $stmt->bind_param('s', $_SESSION['teamname'] );
               $stmt->execute();
                $stmt->close(); 
      echo "<script>alert('among TIME magazine’s list of the 100 Most Influential People in the World');</script>";
      header("Refresh:0");
    }

?>
<?php
include("head.php")
?>
<!--Main layout-->
<main>
    
    <div class="container-fluid text-center">
        <!--Card-->
        <div class="card card-cascade wider reverse my-4 pb-5">
            <!--Card image-->
            <div class="view overlay rgba-white-slight wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <img src="11.jpg" class="img-fluid">
                <a href="#!">
                    <div class="mask waves-effect waves-light"></div>
                </a>
            </div>
            
            <!--/Card image-->
            <!--Card content-->
            <div class="card-body text-center wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                <!--Title-->
                <h4 class="card-title"><strong>Round-3 Completed</strong></h4>
                <h5 class="blue-text"><strong>Please check the leaderboard for your ranking</strong></h5>
                
                <a href="../leaderboard.php" class="btn btn-primary btn-lg waves-effect waves-light">leaderboard</a>
               
                
            </div>
            <!--/.Card content-->
        </div>
        <!--/.Card-->
        
    </div>
    
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->