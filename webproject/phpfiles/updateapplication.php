<?php 
include "config.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		$firstname = $_POST['firstname'];
		$user_id = $_POST['user_id'];
		$lastname = $_POST['lastname'];
		$service = $_POST['service'];
       $date = $_POST['date'];
		// write the update query
		$sql = "UPDATE `applieduser` SET `service`='$service' WHERE `id`='$user_id'";

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
	$sql = "SELECT * FROM `applieduser` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];
			
			$service  = $row['service'];
			$date = $row['date'];

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





		<h3 align="center"> Updpate Application</h3>
    <br><br>
		<form action="" method="post">
   <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div>
		  <fieldset>
                                                    <label>First name</label>
                                                    <input type="text" name = "firstname"class="form-control" name="firstname" id="email" placeholder="First Name "  value="<?php echo $firstname; ?>">  
                                                </div>

  <input type="hidden" name="user_id" value="<?php echo $id; ?>">
		  

  </div>
                                            </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputIconLeft">Last Name</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1"></span>
                                                        <input type="text" class="form-control" name="lastname" id="exampleInputIconLeft" placeholder="Last Name" value="<?php echo $lastname; ?>" >
                                                    </div>
                                                </div>
                                          
                                                <div class="mb-3">
                                                    <label >Service</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="service" placeholder="service" value="<?php echo $service; ?>">
                                                        <span class="input-group-text" id="basic-addon2"></span>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label >appointment date</label>
                                                    <div class="input-group">
                                                        <input type="date" class="form-control" name="date" id="exampleInputIconPassword" placeholder=" appointment date" value="<?php echo $date; ?>">
                                                        <span class="input-group-text" id="basic-addon3"><span ></span></span>
                                                    </div>
                                                </div>
                                              
                                       
                                            </div>
                                            <div class="col-lg-4 col-sm-6">

                                                
                                          
 <input type="submit" value="Update" name="update">
		  </fieldset>
</form >

		</body>
		</html>





	<?php
	} else{
		header('Location: create.php');
	}

}
?>
