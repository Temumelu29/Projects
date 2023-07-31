<?php 
include "config.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['new_post'])) {
		$title = $_POST['title'];
		$user_id = $_POST['user_id'];
		$content = $_POST['content'];
		

		// write the update query
		$sql = "UPDATE `blog_data` SET `title`='$title',`content`='$content' WHERE `ID`='$user_id'";

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
	$sql = "SELECT * FROM `blog_data` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$title = $row['title'];
			$content = $row['content'];
            $id = $row['id'];
			
		}

	?>

<!DOCTYPE html>
<html lang="en">

<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Volt Bootstrap 5 Dashboard - Forms">
<meta name="author" content="Themesberg">
<meta name="description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
<link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">

<meta property="og:type" content="website">
<meta property="og:url" content="https://demo.themesberg.com/volt">
<meta property="og:title" content="Volt Bootstrap 5 Dashboard - Forms">
<meta property="og:description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://demo.themesberg.com/volt">
<meta property="twitter:title" content="Volt Bootstrap 5 Dashboard - Forms">
<meta property="twitter:description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

<link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="../../assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<link type="text/css" href="../../vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<link type="text/css" href="../../vendor/notyf/notyf.min.css" rel="stylesheet">

<link type="text/css" href="../../css/volt.css" rel="stylesheet">

</head>

<body class="bg-soft">
<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    
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
            <h2 class="h6">Hi, Jane</h2>
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
          <a href="messages.php" class="nav-link">
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



                        <div class="py-4">
                          
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                               
                              
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="card border-light shadow-sm components-section">
                                    <div class="card-body">     
                                        <div class="row mb-4">
                                            <div class="col-lg-4 col-sm-6">
                                                <!-- Form -->



                                                <div class="mb-4">
<form method = "POST" action = "">
 <fieldset>
                                                    Title
                                                    <input type="text" name = "title"class="form-control"  placeholder="title " value="<?php echo $title; ?>">  
                                                </div>



  <div class="my-4">
                                                    <label for="textarea">Description about your appplication</label>
                                                    
<textarea class="form-control" placeholder="Enter your message..." name="content" cols="10" rows="4" value="<?php echo $content; ?>"></textarea>
                                                  </div>

                                      <input  type = "submit" name="new_post" value="Update" class="btn btn-outline-gray"> 
</fieldset>
</form>                                        
 
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
<?php
	} else{
		header('Location: view.php');
	}

}
?>
