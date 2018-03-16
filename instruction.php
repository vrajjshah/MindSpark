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
            <li>Teamnames may contain only digits, upper and lowercase letters and underscores</li>
            <li>Emails must have a valid email format</li>
            <li>Passwords must be at least 6 characters long</li>
            <li>Passwords must contain
                <ul>
                    <li>At least one uppercase letter (A..Z)</li>
                    <li>At least one lowercase letter (a..z)</li>
                    <li>At least one number (0..9)</li>
                </ul>
            </li>
            <li>The participants whose mobile numbers are registered with us will only be able to register</li>
            <li>Your password and confirmation must match exactly</li>
        </ul></strong></p>

                    

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