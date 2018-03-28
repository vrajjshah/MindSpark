<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true) {
$logged = 'in';
} else {
$logged = 'out';
}
?>
<?php
include("head.php")
?>
<main>
    
    <div class="container-fluid text-center">
        <!--Card-->
        <div class="card card-cascade wider reverse  my-5 pb-5" style="height: 40rem;">
            
            
            <!--/Card image-->
            <!--Card content-->
            <div class="card-body text-center wow fadeIn " data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                <!--Title-->
                <h2 class="card-title blue-text "><strong>Instructions</strong></h2>
                <p class="card-title blue-text" ><strong> <ul class="purple-text" style="text-align: left;">
                    <li>Use Names as per wikipedia</li>
                    <li>use date as dd/mm/yyyy</li>
                    <li>We will be observing your activities, A team working with other team will be scrutinized.</li>
                    <li>Final Result will be decided by the Event coordinator and team.</li>
                   </strong></p>
                
                <a href="login.php" class="btn btn-primary btn-lg waves-effect waves-light">Continue to Login</a>
                
            </div>
            <!--/.Card content-->
        </div>
        <!--/.Card-->
        
    </div>
    
</main>
<?php
include("foot.php")
?>