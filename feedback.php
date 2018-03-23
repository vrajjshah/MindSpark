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
            <!-- <div class="view overlay rgba-white-slight wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <img src="2/img%2520135.jpg" class="img-fluid">
                <a href="#!">
                    <div class="mask waves-effect waves-light"></div>
                </a>
            </div> -->
            
            <!--/Card image-->
            <!--Card content-->
            <div class="card-body text-center wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                <!--Title-->
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdPQBzsXp_llGq728e_9NySc2bz3NDwpNqwiq9JQEO7mDp-8g/viewform?embedded=true" width="100%" height="1500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
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