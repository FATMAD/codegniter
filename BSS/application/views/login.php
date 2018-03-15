<!DOCTYPE html>  
 <html>  
 <head>  
      <title>Webslesson | <?php echo $title; ?></title>  
      <link rel="stylesheet" 

href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">

 </head>  
 <body> 
  <div class="limiter">


      <div class="container">  
           <br /><br /><br />  
           <form method="post" action="<?php echo base_url(); ?>main/login_validation">  
                <div class="form-group"> 
                <span class="login100-form-title p-b-70">
                   Welcome
                </span>
                <span class="login100-form-avatar">
                    <img src="assets/images/img.png" alt="AVATAR">
                    </span> 
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <span class="text-danger"></span>                 
                </div>  
                <div class="form-group">  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <span class="text-danger"></span>  
                </div>  


                <div class="form-group,container-login100-form-btn">  
                     <input type="submit" name="insert" value="Login" class="login100-form-btn"/> 
                     <?php  
                     $ci =& get_instance();
                          echo '<label class="text-danger">'.$ci->session->flashdata("error").'</label>';  
                     ?>  
                </div> 


                  <ul class="login-more p-t-190">
            <li class="m-b-8">
              <span class="txt1">
                Forgot
              </span>

              <a href="#" class="txt2">
                Username / Password?
              </a>
            </li>

            <li>
              <span class="txt1">
                Don’t have an account?
              </span>

              <a href="#" class="txt2">
                Sign up
              </a>
            </li>
          </ul> 
           </form>  
      </div> 
      </div> 




<div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/bootstrap/js/popper.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/daterangepicker/moment.min.js"></script>
  <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="assets/js/main.js"></script>      
 </body>  
 </html> 