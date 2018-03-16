<?php  
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
    {   
         if ($hintvalue=="1") {

            echo "<script>alert('Hint here');</script>";
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
        $stmt = $mysqli->prepare("UPDATE members set hint='$hint',hintvalue='1' WHERE teamname = ?");
               $stmt->bind_param('s', $_SESSION['teamname'] );
               $stmt->execute();
                $stmt->close(); 
       echo "<script>alert('Hint here');</script>";
    }
   
?>