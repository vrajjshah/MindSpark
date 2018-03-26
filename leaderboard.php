<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true) {
$logged = 'in';
} else {
$logged = 'out';
}
$stmt = $mysqli->prepare("SELECT round FROM round WHERE id ='0'");
$stmt->execute();
$stmt->bind_result($round);
$stmt->fetch();
$stmt->close();
?>
<?php
include("head.php")
?>
<head>
  <meta http-equiv="refresh" content="60">
</head>
<!--Main layout-->
<main>
    <title>Leaderboard   GMT Timezone</title>
    <div class="container-fluid text-center">
        <!--Card-->
        <div class="card card-cascade wider reverse my-4 pb-5">
            <!--Card image-->
            <div class="view overlay rgba-white-slight wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <h4 style="padding-top: 2%; color: #E3468C;"><strong>Leaderboard GMT Timezone</strong></h4>
                <?php echo '<p class="blue-text">Round ' . $round . '   </p>'; ?>
                
                <?php
                
                $sql = 'SELECT `Teamname`,`levels`,`date` FROM `members` ORDER BY `levels` DESC, `date` ASC';
                mysqli_select_db($mysqli,'secure_login');
                $retval = mysqli_query($mysqli,$sql);
                if(! $retval)
                {
                die('Could not get data :'.mysqli_error());
                }
                ?>
                <style type="text/css">
                .table-dark{
                background-color: #82B6AD;
                }
                </style>
                <div style="padding-top: 2%;">
                    <table class=" table table-striped" border="1" style="width: 50%;" align="center">
                        
                        <tr >
                            <td class="table-dark">
                                Rank
                            </td>
                            <td class="table-dark">
                                Teamname
                            </td>
                            <td class="table-dark">
                                Level
                            </td>
                            <td class="table-dark">
                                Timestamp
                            </td>
                        </tr>
                        <?php $i=1;
                        while($row =mysqli_fetch_array($retval , MYSQLI_BOTH))
                        {
                        ?>
                        <tr>
                            <td>
                                <?php echo $i; ?>
                            </td>
                            <td>
                                <?php echo "" .$row["Teamname"]; ?>
                            </td>
                            <td>
                                <?php echo "" .$row["levels"]; ?>
                            </td>
                            <td>
                                <?php echo "" .$row["date"]; ?>
                            </td>
                            
                            
                        </tr>
                        <?php $i++;} ?>
                    </table>
                </div>
                <div class="mask waves-effect waves-light"></div>
            </a>
        </div>
        
        
        <!--/Card image-->
        <!--Card content-->
        
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