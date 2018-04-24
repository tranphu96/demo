<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo base_url('Login/images/icons/favicon.ico'); ?>"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Login/vendor/bootstrap/css/bootstrap.min.css');?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Login/fonts/iconic/css/material-design-iconic-font.min.css');?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Login/vendor/animate/animate.css');?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Login/vendor/css-hamburgers/hamburgers.min.css');?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Login/vendor/animsition/css/animsition.min.css');?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Login/vendor/select2/select2.min.css');?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Login/vendor/daterangepicker/daterangepicker.css');?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Login/css/util.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Login/css/main.css');?>">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: <?php echo base_url ();?>('images/bg-01.jpg');">
        <div class="wrap-login100">
            <form class="login100-form validate-form" role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

                <span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>


                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100"  placeholder="username" name="username" type="username" autofocus>
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" placeholder="Password" name="password" type="password" value="">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>


                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit" value="login" name="login" >
                        Login
                    </button>
                </div>


            </form>
        </div>
    </div>
</div>





</body>
</html>