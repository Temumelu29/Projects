<?php 
include "config.php";
session_start();

	if (isset($_POST['update'])) {
		$firstname = $_POST['firstname'];
		$user_id = $_POST['user_id'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];
    $_SESSION['username'] = $session_username;

		// write the update query
		$sql = "UPDATE `registerduser` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`gender`='$gender' WHERE `username`='$session_username'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `registerduser` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$first_name = $row['firstname'];
			$lastname = $row['lastname'];
			$email = $row['email'];
			$password  = $row['password'];
			$gender = $row['gender'];
			$id = $row['id'];
		}

	?>
<!DOCTYPE html>
<html lang="en">

<head> 

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Volt Bootstrap 5 Dashboard - Settings">
<meta name="author" content="Themesberg">
<meta name="description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
<link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">
<meta property="og:type" content="website">
<meta property="og:url" content="https://demo.themesberg.com/volt">
<meta property="og:title" content="Volt Bootstrap 5 Dashboard - Settings">
<meta property="og:description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://demo.themesberg.com/volt">
<meta property="twitter:title" content="Volt Bootstrap 5 Dashboard - Settings">
<meta property="twitter:description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="../assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Fontawesome -->
<link type="text/css" href="../vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Notyf -->
<link type="text/css" href="../vendor/notyf/notyf.min.css" rel="stylesheet">

<!-- Volt CSS -->
<link type="text/css" href="../css/volt.css" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>
 <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    <a class="navbar-brand mr-lg-5" href="../index.html">
        <img class="navbar-brand-dark" src="../assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="../assets/img/brand/dark.svg" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
        
        <div class="container-fluid bg-soft">
            <div class="row">
                <div class="col-12">
                    
                    <nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
      <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
        <div class="d-flex align-items-center">
          <div class="user-avatar lg-avatar mr-4">
            <img src="../assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
          </div>
          <div class="d-block">
            <h2 class="h6"></h2>
            <a href="../pages/examples/sign-in.html" class="btn btn-secondary text-dark btn-xs"><span class="mr-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
          </div>
        </div>
        <div class="collapse-close d-md-none">
            <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse"
                data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                aria-label="Toggle navigation"></a>
        </div>
      </div>




      <ul class="nav flex-column">
      <li class="nav-item" class="active" >
          <a href="applieduser.php" class="nav-link" > 
              <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
              <span>Applied users</span>
          </a>
      <li class="nav-item" class="active" >
          <a href="registerduser.php" class="nav-link" > 
              <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
              <span>Registerd users</span>
          </a>
        </li>


        <li class="nav-item ">
          <a href="settings.php" class="nav-link">
              <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
              <span>Register User</span>
          </a>
        </li>

        <li class="nav-item ">
          <a href="approval.php" class="nav-link">
              <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
              <span> Requests</span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="acceptedusers.php" class="nav-link">
              <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
              <span> Accepted users</span>
          </a>
        </li>

     

        <li class="nav-item ">
          <a href="createstatus.php" class="nav-link">
              <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
              <span> Write status</span>
          </a>
        </li>

        <li class="nav-item ">
          <a href="viewstatus.php" class="nav-link">
              <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
              <span> View feedback</span>
          </a>
        </li>






            </ul>
    </div>
</nav>

<main class="content">

                        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
    <div class="container-fluid px-0">
      <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
        <div class="d-flex">
        </div>
        <!-- Navbar links -->
          
            <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media d-flex align-items-center">
               
                <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">


                  <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
                
                </div>
              </div>
            </a>
              <a class="dropdown-item font-weight-bold" href="#"><span class="far fa-user-circle"></span>Hana</a>
              <div role="separator" class="dropdown-divider"></div>
              <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-sign-out-alt text-danger"></span>Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
</nav>

                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
                            
                        </div>
                        <div class="row">


                            <div class="col-12 col-xl-8">
                                <div class="card card-body bg-white border-light shadow-sm mb-4">





		<h2>User Update Form</h2>
		<form action="" method="post">
   <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div>
		  <fieldset>
		   
		    First name:<br>
		    <input class="form-control" type="text" name="firstname" value="<?php echo $first_name; ?>">


		    <input type="hidden" name="user_id" value="<?php echo $id; ?>">
		  

  </div>
                                            </div>

 <div class="col-md-6 mb-3">
                                                <div>

		    Last name:<br>
		    <input class="form-control" type="text" name="lastname" value="<?php echo $lastname; ?>">
   </div>
                                            </div>
                                        </div>
		   
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
		    Email:<br>
		    <input type="email" name="email" value="<?php echo $email; ?>">
		 </div>
                                            </div>


<div class="col-md-6 mb-3">
		    Password:<br>
		    <input class="form-control" type="password" class="form-control"  name="password" value="<?php echo $password; ?>">
		 


                                                </div>
                 <div class="col-md-6 mb-3">                         
		    Gender:<br>
		    <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){ echo "checked";} ?> >Male
		    <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){ echo "checked";} ?>>Female
		    <br><br></div></div>
		    <input type="submit" value="Update" name="update">
		  </fieldset>
		</form>
 <footer class="footer section py-5">
    <div class="row">
       
        <div class="col-12 col-lg-6">
            <ul class="list-inline list-group-flush list-group-borderless text-center text-xl-right mb-0">
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="https://themesberg.com/about">About</a>
                </li>
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="https://themesberg.com/themes">Themes</a>
                </li>
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="https://themesberg.com/blog">Blog</a>
                </li>
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="https://themesberg.com/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
		</body>
		</html>




	<?php
	} else{
		header('Location: create.php');
	}

}
?>
