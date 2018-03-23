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
                
           
                <!--/Card image-->

                <!--Card content-->
                <div class="card-body text-center wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                    <!--Title-->
                    <h3 class="card-title"><strong>Our Team</strong></h3>
                   

                    <div >
                        <table>
                             <tr>
                                <td align="left">
                                    <div style="width: 30%">
                                    <img src="2/krupal.png" style="width: 100%;" >
                                    <br>
                                </div>
                                </td>
                                <td align="left" >
                                    <h4> Krupal Upadhyay</h4>
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <td height="50em">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <div style="width: 30%">
                                    <img src="2/2.png" style="width: 100%;" >
                                </div>
                                </td>
                                <td align="left" >
                                    <h4>Mayank Patel</h4>
                                </td>
                            </tr>
                        </table>
                    
                    </div>
                    
                        

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
    