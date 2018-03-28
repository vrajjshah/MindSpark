
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
  
</head>
<!--Main layout-->
<main>
    <title>finalist</title>
    <div class="container-fluid text-center">
        <!--Card-->
        <div class="card card-cascade wider reverse my-4 pb-5">
            <!--Card image-->
            <div class="view overlay rgba-white-slight wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <h4 style="padding-top: 2%; color: #E3468C;"><strong>Round 3 winners</strong></h4>
                <h3 style="padding-top: 2%; color: #E3468C;"><strong>Round 4 winners will be declared at 2:30 PM</strong></h3>
                
                
                <?php
                
                $sql = 'SELECT `Teamname`,`levels`,`date` FROM `members` WHERE levels>=6 ORDER BY `levels` DESC, `date` ASC';
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
                    <table class=" table table-striped" style="width: 50%;" border="1" align="center">
                        
                        <tbody><tr>
                            <td class="table-dark">
                                Rank
                            </td>
                            <td class="table-dark">
                                Teamname
                            </td>
                           
                        </tr>
                       
                                               <!--  <tr>
                            <td>
                                1                            </td>
                            <td>
                                Shrutam                            </td>
                            
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                2                            </td>
                            <td>
                                RahulandMahek                         </td>
                            
                            
                        </tr> -->
                                                
                                            </tbody></table>
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