<?php
include_once 'includes/register.inc.php';
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
<script type="text/JavaScript" src="js/sha512.js"></script>
<script type="text/JavaScript" src="js/forms.js"></script>
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
      
      
      
      <section class="form-gradient d-flex" style="align-self: center;" >
        <!--Form with header-->
        <div class="card ">
          <!--Header-->
          <div class="header pt-1 aqua-gradient">
            <div class="row d-flex justify-content-center">
              <h3 class="white-text mb-3 pt-3 font-weight-bold">Sign Up</h3>
            </div>
            
          </div>
          <!--Header-->
          <div class="card-body mx-5 mt-5">
            <?php
  if (!empty($error_msg)) {
  echo $error_msg;
  }
  ?>
            <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" name="registration_form">
              <div class="md-form ">
                <input  id="teamname" class="form-control" type="text" name="teamname">
                <label for="Form-email3">Your Teamname</label>
              </div>
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
              <div class="md-form pb-1 pb-md-3">
                <input type="password" class="form-control" name="confirmpwd" id="confirmpwd">
                <label for="Form-pass3">Confirm password</label>
                
              </div>
              <div class="md-form ">
                <input type="text" id="mobile" class="form-control"  name="mobile">
                <label for="Form-email3">Your mobile</label>
              </div>
              <!--Grid row-->
              <div class="row d-flex align-items-center mb-4">
                <!--Grid column-->
                <div class="col-md-1 col-md-5 d-flex align-items-start">
                  <div class="text-center">
                    <button type="button" class="btn aqua-gradient btn-primary z-depth-1a"  onclick="return regformhash(this.form,
                    this.form.teamname,
                    this.form.email,
                    this.form.password,
                    this.form.confirmpwd,
                    this.form.mobile);">Signup</button>
                  </div>
                </div>
              </form>
              <!--Grid column-->
              <!--Grid column-->
              
              <!--Grid column-->
              <div class="col-md-7">
                <p class="font-small grey-text d-flex justify-content-end mt-3">Already have an account? <a href="login.php" class="dark-grey-text ml-1 font-weight-bold"> Sign in</a></p>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
            
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