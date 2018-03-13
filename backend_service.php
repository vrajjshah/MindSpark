<?php
include 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/psl-config.php';
 
sec_session_start();
 if (login_check($mysqli) == true)
    $stmt = $mysqli->prepare("SELECT levels FROM members WHERE teamname = ?");
               $stmt->bind_param('s', $_SESSION['teamname'] );
               $stmt->execute();
                $stmt->bind_result($level);
                $stmt->fetch();
        
         public function check($level)
         {
             # code...
         
          if ($level == 2) {

            header("Location:level2.php");
             # code...
         }
         elseif ($level == 1) {
            header("Location:level1.php");
             # code...
         }
          
     }
     
       ?>