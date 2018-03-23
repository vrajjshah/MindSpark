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
<script type="text/JavaScript" src="js/sha512.js"></script>
<script type="text/JavaScript" src="js/forms.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
.form-gradient .font-small {
font-size: 0.8rem; }
.form-gradient .header {
border-top-left-radius: .3rem;
border-top-right-radius: .3rem; }
.form-gradient input[type=text]:focus:not([readonly]) {
border-bottom: 1px solid #fd9267;
-webkit-box-shadow: 0 1px 0 0 #fd9267;
box-shadow: 0 1px 0 0 #fd9267; }
.form-gradient input[type=text]:focus:not([readonly]) + label {
color: #4f4f4f; }
.form-gradient input[type=password]:focus:not([readonly]) {
border-bottom: 1px solid #fd9267;
-webkit-box-shadow: 0 1px 0 0 #fd9267;
box-shadow: 0 1px 0 0 #fd9267; }
.form-gradient input[type=password]:focus:not([readonly]) + label {
color: #4f4f4f; }
</style>
<main>
  
  <div class="container-fluid text-center">
    <!--Card-->
    <div class="card card-cascade wider reverse my-4 pb-5">
      <!--Card image-->
      
      
      <!--/Card image-->
      <!--Card content-->
      
      <?php
      if (isset($_GET['error'])) {
      echo '<p class="error">Error Logging In!</p>';
      }
      ?>
      
      <section class="form-gradient d-flex" style="align-self: center;" >
        <!--Form with header-->
        <div class="card ">
          <!--Header-->
          <div class="header pt-1 aqua-gradient">
            <div class="row d-flex justify-content-center">
              <h3 class="white-text mb-3 pt-3 font-weight-bold">Log in</h3>
            </div>
            
          </div>
          <!--Header-->
          <div class="card-body mx-5 mt-5">
            
            <?php echo '<p class="blue-text">Round ' . $round . '   </p>'; ?>
            <!--Body-->
            <form action="includes/process_login.php" method="post" name="login_form">
              <div class="md-form ">
                <input type="text" id="email" class="form-control" type="text" name="email">
                <label for="Form-email3">Your email</label>
              </div>
              <div class="md-form pb-1 pb-md-3">
                <input type="password" class="form-control"  type="password"
                name="password"
                id="password">
                <label for="Form-pass3">Your password</label>
                
              </div>
              <!--Grid row-->
              <div class="row d-flex align-items-center mb-4">
                <!--Grid column-->
                <div class="col-md-1 col-md-5 d-flex align-items-start">
                  <div class="text-center">
                    <button type="button" class="btn btn-grey btn-primary z-depth-1a "  onclick="formhash(this.form, this.form.password)" >Log in</button>
                  </div>
                </div>
              </form>
              <!--Grid column-->
              <!--Grid column-->
              <div class="col-md-7">
                <p class="font-small grey-text d-flex justify-content-end mt-3">Don't have an account? <a href="register.php" class="dark-grey-text ml-1 font-weight-bold"> Sign up</a></p>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
            <?php
            if (login_check($mysqli) == true) {
            echo '<p class="blue-text">Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['teamname']) . '.  <a class="btn btn-secondary btn-grey waves-effect purple-gradient waves-light ">Continue</a>
          </p>';
          
          echo '<p class="blue-text">Do you want to change user? &nbsp<a class="btn btn-default purple-gradient blue-text btn-grey waves-effect waves-light" href="includes/logout.php">&nbsp Logout &nbsp </a>.</p>';
          } else {
          echo '<p class="blue-text">Currently logged ' . $logged . '.</p>';
          echo '<p class="blue-text">If you don\'t have a login, please <a class="btn purple-gradient btn-default blue-text btn-grey waves-effect waves-light" href="register.php">Register</a>.</p>';
          }
          ?>
        </div>
        
        <!--/Form with header-->
      </section>
      
      
      
      <!-- <a class="btn btn-secondary btn-lg waves-effect waves-light">Secondary button</a>
      <a class="btn btn-default btn-lg waves-effect waves-light">Default button</a> -->
    </div>
    <!--/.Card content-->
  </div>
  <!--/.Card-->
  
</div>
</main>
<?php
include("foot.php")
?>