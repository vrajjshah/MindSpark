
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
                <h4 style="padding-top: 2%; color: #E3468C;"><strong>Round 1 winners</strong></h4>
                
                
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
                            <td class="table-dark">
                                Level
                            </td>
                            <td class="table-dark">
                                Timestamp
                            </td>
                        </tr>
                       
                                                <tr>
                            <td>
                                1                            </td>
                            <td>
                                notnull                            </td>
                            <td>
                                15                            </td>
                            <td>
                                2018-03-27 14:38:41                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                2                            </td>
                            <td>
                                Crankshaft                            </td>
                            <td>
                                15                            </td>
                            <td>
                                2018-03-27 18:01:56                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                3                            </td>
                            <td>
                                Shrutam                            </td>
                            <td>
                                15                            </td>
                            <td>
                                2018-03-27 18:07:53                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                4                            </td>
                            <td>
                                Dynamite                            </td>
                            <td>
                                15                            </td>
                            <td>
                                2018-03-27 18:09:43                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                5                            </td>
                            <td>
                                Dothraki                            </td>
                            <td>
                                15                            </td>
                            <td>
                                2018-03-27 18:10:07                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                6                            </td>
                            <td>
                                H2p                            </td>
                            <td>
                                15                            </td>
                            <td>
                                2018-03-27 18:10:41                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                7                            </td>
                            <td>
                                Rikin                            </td>
                            <td>
                                15                            </td>
                            <td>
                                2018-03-27 18:11:06                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                8                            </td>
                            <td>
                                MJH                            </td>
                            <td>
                                15                            </td>
                            <td>
                                2018-03-27 18:18:24                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                9                            </td>
                            <td>
                                avengers                            </td>
                            <td>
                                15                            </td>
                            <td>
                                2018-03-27 18:20:00                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                10                            </td>
                            <td>
                                pH                            </td>
                            <td>
                                15                            </td>
                            <td>
                                2018-03-27 18:20:13                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                11                            </td>
                            <td>
                                RahulandMahek                            </td>
                            <td>
                                15                            </td>
                            <td>
                                2018-03-27 18:21:48                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                12                            </td>
                            <td>
                                MakIce                            </td>
                            <td>
                                14                            </td>
                            <td>
                                2018-03-27 17:13:42                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                13                            </td>
                            <td>
                                Sunshine14                            </td>
                            <td>
                                14                            </td>
                            <td>
                                2018-03-27 17:15:42                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                14                            </td>
                            <td>
                                Spammers                            </td>
                            <td>
                                14                            </td>
                            <td>
                                2018-03-27 17:17:20                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                15                            </td>
                            <td>
                                Warriors                            </td>
                            <td>
                                14                            </td>
                            <td>
                                2018-03-27 17:29:58                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                16                            </td>
                            <td>
                                KR                            </td>
                            <td>
                                14                            </td>
                            <td>
                                2018-03-27 17:40:52                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                17                            </td>
                            <td>
                                Anonymous                            </td>
                            <td>
                                14                            </td>
                            <td>
                                2018-03-27 18:03:39                            </td>
                            
                            
                        </tr>
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