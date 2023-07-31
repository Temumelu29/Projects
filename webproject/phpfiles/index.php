<?php 
session_start();
  include("includes/config.php");

   
   $output = "";

 if (isset($_POST['login'])) {
  	   $uname = $_POST['uname'];
  	   $pass = $_POST['pass'];
  	   if (empty($uname)) {
  	   }else if(empty($pass)){
  	   }else{
         $query = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";
         $res = mysqli_query($connect,$query);

         if (mysqli_num_rows($res) == 1) {
echo "dersual";
            $row = mysqli_fetch_array($res);

         	  if ($row['role'] == "Admin") {

         	  	$_SESSION['username'] = $row['username'];
         	  	header("Location: applieduser.php");
         	  	
         	  }else{
                
                $_SESSION['username'] = $row['username'];
                header("Location: viewuserstatus.php");


         	  }
         	 $output .= "you have logged-In";
         }else{
             $output .= "Failed to login";
         }

  	   }
  }



 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

</head>
<body>
	<?php include("includes/header.php"); ?>












	<!DOCTYPE html>
<html lang="en">

<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Volt Bootstrap 5 Dashboard - Forgot password</title><link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="../assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">


<link type="text/css" href="../vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<link type="text/css" href="../vendor/notyf/notyf.min.css" rel="stylesheet">

<link type="text/css" href="../css/volt.css" rel="stylesheet">


</head>


<body class="bg-soft">
    <main>
        <section class="vh-lg-100 d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center form-bg-image" data-background-lg="../../assets/img/illustrations/signin.svg">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Sign in to our platform</h1>
                            </div>
                            <form method="post" class="mt-4">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="username">Your Username</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><span class="fas fa-envelope"></span></span>
                                        <input type="text" name="uname" class="form-control" placeholder="Username" id="email" autofocus required>
                                    </div>  
                                </div>
                               
                                <div class="form-group">
                                    
                                    <div class="form-group mb-4">
                                        <label for="password">Your Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"><span class="fas fa-unlock-alt"></span></span>
                                            <input type="password" name="pass" placeholder="Password" class="form-control" id="password" required>
                                        </div>  
                                    </div>
                                        <div><a href="forgot-password.html" class="small text-right">Forgot password?</a></div>
                                    </div>
                                
								<input type="submit" name="login"  value="login" class="btn btn-block btn-primary">

                           
                            </form>
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Core -->
<script src="../../vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="../../vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Vendor JS -->
<script src="../../vendor/onscreen/dist/on-screen.umd.min.js"></script>

<!-- Slider -->
<script src="../../vendor/nouislider/distribute/nouislider.min.js"></script>

<!-- Jarallax -->
<script src="../../vendor/jarallax/dist/jarallax.min.js"></script>

<!-- Smooth scroll -->
<script src="../../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Count up -->
<script src="../../vendor/countup.js/dist/countUp.umd.js"></script>

<!-- Notyf -->
<script src="../../vendor/notyf/notyf.min.js"></script>

<!-- Charts -->
<script src="../../vendor/chartist/dist/chartist.min.js"></script>
<script src="../../vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Datepicker -->
<script src="../../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Simplebar -->
<script src="../../vendor/simplebar/dist/simplebar.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="../../assets/js/volt.js"></script>

    
</body>

</html>






































