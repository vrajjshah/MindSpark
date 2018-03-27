
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
                                Rikin                            </td>
                            <td>
                                16                            </td>
                            <td>
                                2018-03-26 18:05:51                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                2                            </td>
                            <td>
                                Shrutam                            </td>
                            <td>
                                16                            </td>
                            <td>
                                2018-03-26 18:06:29                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                3                            </td>
                            <td>
                                Dynamite                            </td>
                            <td>
                                16                            </td>
                            <td>
                                2018-03-26 18:06:40                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                4                            </td>
                            <td>
                                India                            </td>
                            <td>
                                16                            </td>
                            <td>
                                2018-03-26 18:06:40                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                5                            </td>
                            <td>
                                MJH                            </td>
                            <td>
                                16                            </td>
                            <td>
                                2018-03-26 18:09:24                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                6                            </td>
                            <td>
                                H2p                            </td>
                            <td>
                                16                            </td>
                            <td>
                                2018-03-26 18:10:59                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                7                            </td>
                            <td>
                                Toreto                            </td>
                            <td>
                                16                            </td>
                            <td>
                                2018-03-26 18:22:38                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                8                            </td>
                            <td>
                                Crankshaft                            </td>
                            <td>
                                16                            </td>
                            <td>
                                2018-03-26 18:29:12                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                9                            </td>
                            <td>
                                rootusers                            </td>
                            <td>
                                16                            </td>
                            <td>
                                2018-03-26 18:30:02                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                10                            </td>
                            <td>
                                avengers                            </td>
                            <td>
                                15                            </td>
                            <td>
                                2018-03-26 18:29:49                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                11                            </td>
                            <td>
                                MakIce                            </td>
                            <td>
                                15                            </td>
                            <td>
                                2018-03-26 18:29:56                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                12                            </td>
                            <td>
                                Warriors                            </td>
                            <td>
                                15                            </td>
                            <td>
                                2018-03-26 18:31:20                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                13                            </td>
                            <td>
                                Hackers                            </td>
                            <td>
                                14                            </td>
                            <td>
                                2018-03-26 18:00:48                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                14                            </td>
                            <td>
                                Devils                            </td>
                            <td>
                                14                            </td>
                            <td>
                                2018-03-26 18:11:26                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                15                            </td>
                            <td>
                                Spammers                            </td>
                            <td>
                                14                            </td>
                            <td>
                                2018-03-26 18:16:08                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                16                            </td>
                            <td>
                                VENDETTA                            </td>
                            <td>
                                14                            </td>
                            <td>
                                2018-03-26 18:18:03                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                17                            </td>
                            <td>
                                Nightswatch                            </td>
                            <td>
                                14                            </td>
                            <td>
                                2018-03-26 18:23:57                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                18                            </td>
                            <td>
                                Beta_dm                            </td>
                            <td>
                                14                            </td>
                            <td>
                                2018-03-26 18:25:33                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                19                            </td>
                            <td>
                                Anonymous                            </td>
                            <td>
                                14                            </td>
                            <td>
                                2018-03-26 18:29:32                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                20                            </td>
                            <td>
                                RahulandMahek                            </td>
                            <td>
                                14                            </td>
                            <td>
                                2018-03-26 18:29:59                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                21                            </td>
                            <td>
                                TEAM_UNITY                            </td>
                            <td>
                                13                            </td>
                            <td>
                                2018-03-26 18:20:51                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                22                            </td>
                            <td>
                                Skks                            </td>
                            <td>
                                13                            </td>
                            <td>
                                2018-03-26 18:28:23                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                23                            </td>
                            <td>
                                Dothraki                            </td>
                            <td>
                                12                            </td>
                            <td>
                                2018-03-26 14:19:09                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                24                            </td>
                            <td>
                                SANAN                            </td>
                            <td>
                                12                            </td>
                            <td>
                                2018-03-26 17:07:42                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                25                            </td>
                            <td>
                                pH                            </td>
                            <td>
                                11                            </td>
                            <td>
                                2018-03-26 18:21:34                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                26                            </td>
                            <td>
                                Sunshine14                            </td>
                            <td>
                                10                            </td>
                            <td>
                                2018-03-26 18:16:00                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                27                            </td>
                            <td>
                                KR                            </td>
                            <td>
                                9                            </td>
                            <td>
                                2018-03-26 18:26:48                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                28                            </td>
                            <td>
                                Vwizards                            </td>
                            <td>
                                9                            </td>
                            <td>
                                2018-03-26 18:30:02                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                29                            </td>
                            <td>
                                Neha                            </td>
                            <td>
                                8                            </td>
                            <td>
                                2018-03-26 18:29:48                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                30                            </td>
                            <td>
                                PPJ                            </td>
                            <td>
                                7                            </td>
                            <td>
                                2018-03-26 17:48:33                            </td>
                            
                            
                        </tr>
                                                <tr>
                            <td>
                                31                            </td>
                            <td>
                                Ghosha_Ria                            </td>
                            <td>
                                6                            </td>
                            <td>
                                2018-03-26 18:29:57                            </td>
                            
                            
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