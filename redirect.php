<?php
include 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/psl-config.php';
sec_session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
        <?php
        $stmt = $mysqli->prepare("SELECT round FROM round WHERE id = '0'");
        
        $stmt->execute();
        $stmt->bind_result($round);
        $stmt->fetch();
        if ($round == "1") {
        # code...
        header('Location: round1/redirect.php');
        }
        else if ($round == "2") {
        # code...
        header('Location: round2/redirect.php');
        }
        else if ($round == "3") {
        # code...
        header('Location: round3/redirect.php');
        }
        else if ($round == "0") {
        # code...
        header('Location: roundover.php');
        }
        ?>
        <?php else : ?>
        <?php header("Location:level1.php"); ?>
        <?php endif; ?>
    </body>
</html>