<?php
  session_start();
  if(isset($_SESSION['user'])){
    header('location:dashboard.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project File Management</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="assets/images/icon.png" />

    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">

    <!-- bootstrap 5.3.0 -->
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="assets/images/img-01.png" alt="IMG">
                </div>
                <form class="login100-form validate-form" action="process/login.php" method="POST">
                    <span class="login100-form-title">
                    Project File Management
                    </span>

                    <?php
                    if (isset($_SESSION['error'])) {
                        echo "
                            <div class='alert alert-danger alert-dismissible'>
                            <h4><i class='icon fa fa-warning'></i> Error!</h4>
                            " . $_SESSION['error'] . "
                            </div>
                        ";
                        unset($_SESSION['error']);
                    }
                    if (isset($_SESSION['success'])) {
                        echo "
                            <div class='alert alert-success alert-dismissible'>
                            <h4><i class='icon fa fa-check'></i> Success!</h4>
                            " . $_SESSION['success'] . "
                            </div>
                        ";
                        unset($_SESSION['success']);
                    }
                    ?>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="username" placeholder="Staff No">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password"  id="password" name="password" placeholder="Password" required autosave="">
                        <span title="Show Password" toggle="#password" class="fa fa-fw fa-eye toggle-password" style="float: right;margin-right: 30px;margin-bottom: 0px;margin-top: -30px; position: relative; z-index: 2; cursor:pointer"></span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="login">
                            Login
                        </button>
                    </div>
                    <div class="text-center p-t-12"></div>
                    <div class="text-center p-t-136"> </div>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="assets/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/vendor/select2/select2.min.js"></script>

    <script src="assets/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

    <script src="assets/js/main.js"></script>
    <!-- <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7d3fca9d58030338","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script> -->
    
    <?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>

    <!-- show/hide password -->
    <script type="text/javascript">
        //toggle password
        $(".toggle-password").click(function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
        });
    </script>

    <!-- alert messages fading -->
<script type="text/javascript">
  $(function() {
    $(".alert:visible").fadeOut(5000);
  });
</script>

</body>
</html>