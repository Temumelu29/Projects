<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head> 

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="../assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">


<link type="text/css" href="../vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<link type="text/css" href="../vendor/notyf/notyf.min.css" rel="stylesheet">

<link type="text/css" href="../css/volt.css" rel="stylesheet">

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
            <a href="logout" class="btn btn-secondary text-dark btn-xs"><span class="mr-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
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





<?php 
include "config.php";

$sql = "SELECT * FROM registerduser";

$result = $conn->query($sql);


?>



                
                    <main class="content">

                        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
    <div class="container-fluid px-0">
      <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
        <div class="d-flex">
        </div>
       
          
            <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media d-flex align-items-center">
               
                <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">


                  <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
                
                </div>
              </div>
            </a>
              <a class="dropdown-item font-weight-bold" href="#"><span class="far fa-user-circle"></span>Hana</a>
              <div role="separator" class="dropdown-divider"></div>
              <a class="dropdown-item font-weight-bold" href="logout.php"><span class="fas fa-sign-out-alt text-danger"></span>Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
</nav>        


                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
                            <div class="d-block mb-4 mb-md-0">
                                
                                <h2 class="h4">All Registerd Users</h2>
                               
                            </div>
                            
                        </div>
                        <div class="table-settings mb-4">
                            <div class="row align-items-center justify-content-between">
                               
                                <div class="col-4 col-md-2 col-xl-1 pl-md-0 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                    <th>ID</th>
		            <th>First Name</th>
		            <th>Last Name</th>
                    <th>Gender</th>
		            <th>Email</th>
		            <th>Password</th>
                                    </tr>
                                </thead>
                                <tbody>



		<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><span class="font-weight-normal"><?php echo $row['id']; ?></span></td>
					<td><span class="font-weight-normal"><?php echo $row['firstname']; ?></span></td>
					<td><span class="font-weight-normal"><?php echo $row['lastname']; ?></span></td>
          <td><span class="font-weight-normal"><?php echo $row['gender']; ?></span></td>
          <td><span class="font-weight-normal"><?php echo $row['email']; ?></span></td>
					<td><span class="font-weight-normal"><?php echo $row['password'];?></span></td>
					<td><a class="btn btn-info" href="updateregisterduser.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	</tbody>
</table>
</div>
        
                                  
                             
                              
                        </div>
                        <footer class="footer section py-5">
    <div class="row">
        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <p class="mb-0 text-center text-xl-left">jhsdikshdik-<span class="current-year"></span> <a class="text-primary font-weight-normal" href="https://themesberg.com" target="_blank">sdmnkjd</a></p>
        </div>

        <div class="col-12 col-lg-6">
            <ul class="list-inline list-group-flush list-group-borderless text-center text-xl-right mb-0">
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="">About</a>
                </li>
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="">Themes</a>
                </li>
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="">Blog</a>
                </li>
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
                    </main>
                </div>
            </div>
        </div>

   
<script src="../vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="../vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="../vendor/onscreen/dist/on-screen.umd.min.js"></script>

<script src="../vendor/nouislider/distribute/nouislider.min.js"></script>

<script src="../vendor/jarallax/dist/jarallax.min.js"></script>

<script src="../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<script src="../vendor/countup.js/dist/countUp.umd.js"></script>

<script src="../vendor/notyf/notyf.min.js"></script>

<script src="../vendor/chartist/dist/chartist.min.js"></script>
<script src="../vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>


<script src="../vendor/simplebar/dist/simplebar.min.js"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="../assets/js/volt.js"></script>

    
</body>

</html>
