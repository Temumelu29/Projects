<?php session_start();

  include "messagess.php"; ?>

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
<a class="dropdown-item font-weight-bold" href="logout.php"><span class="fas fa-sign-out-alt text-danger"></span>Logout</a>
</div>
</li>
</ul>
</div>
</div>
</nav>
    <div class="container mt-5">

        
        <!-- Display posts from database -->
        <div class="row">
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-red mt-5" style="width: 18rem;background-color:#e5e4e2;box-shadow: 2px 2px;">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $q['fullname'];?></h5>
                        <h5 class="card-title"><?php echo $q['email'];?></h5>
                        <h5 class="card-title"><?php echo $q['content'];?></h5>


                            <p class="card-text"><?php echo substr($q['message'], 0, 50);?></p>
                                </div>
                    </div>
                </div>
            <?php }?>
        </div>
       
    </div>










































<style>
.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}
.wrapper {
    display: flex;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
}

#sidebar.active {
    margin-left: -250px;
}
#sidebar {
    min-width: 250px;
    max-width: 250px;
    min-height: 100vh;
}

CSS

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}
@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
}


body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: black;
}

a, a:hover, a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

#sidebar {
    /* don't forget to add all the previously mentioned styles here too */
    background: #ededed;
    color: black;
    transition: all 0.3s;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #4d4d4d;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #4d4d4d;
}

#sidebar ul p {
    color: black;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}
#sidebar ul li a:hover {
    color: black;
    background: #fff;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: black;
    background: #cfcfcf;
}
ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #fff;
}

</style>



