<?php session_start(); ?>
<?php
    include "logic.php";
?>

<!DOCTYPE html>
<html lang="en">

<head> 

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

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
          
        </div>
        <div class="collapse-close d-md-none">
            <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse"
                data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                aria-label="Toggle navigation"></a>
        </div>
      </div>


      <ul class="nav flex-column">
     

    

        <li class="nav-item ">
          <a href="viewuserstatus.php" class="nav-link">
              <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
              <span> View status</span>
          </a>
        </li>

        <li class="nav-item ">
          <a href="writecomment.php" class="nav-link">
              <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
              <span> Write Comment</span>
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


<a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<div class="media d-flex align-items-center">

<div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">


<div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">

</div>
</div>
</a>
<a class="dropdown-item font-weight-bold" href="#"><span class="far fa-user-circle"></span>Temsegen</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item font-weight-bold" href="logout.php"><span class="fas fa-sign-out-alt text-danger"></span>Logout</a>
</div>
</li>
</ul>
</div>
</div>
</nav>     

                        <div class="py-4">



                            
          <div class="d-flex justify-content-between w-100 flex wrap">
          <div class="mb-3 mb-lg-0">
                                    <h1 class="h4">Application status</h1>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h2 class="h4 mb-0">Dear Temesgen,</h2>
                                    </div>
                                    <div class="card-body">
                                       <p>Your application for birth certificate has been accepted! </p>
                                       
                                         </div>
                                </div>
                            </div>













                        </div>

                        <footer class="footer section py-5">
    

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
                    </main>
                </div>
            </div>
        </div>

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


    <script>

        // Bootstrap Notify
        document.getElementById('notifyTopLeft').addEventListener('click', function (){
            const notyf = new Notyf({
                position: {
                    x: 'left',
                    y: 'top',
                },
                types: [
                    {
                        type: 'info',
                        background: '#0948B3',
                        icon: {
                            className: 'fas fa-info-circle',
                            tagName: 'span',
                            color: '#fff'
                        },
                        dismissible: false
                    }
                ]
            });
            notyf.open({
                type: 'info',
                message: 'Send us <b>an email</b> to get support'
            });
        });

        document.getElementById('notifyTopRight').addEventListener('click', function (){
            const notyf = new Notyf({
                position: {
                    x: 'right',
                    y: 'top',
                },
                types: [
                    {
                        type: 'error',
                        background: '#FA5151',
                        icon: {
                            className: 'fas fa-times',
                            tagName: 'span',
                            color: '#fff'
                        },
                        dismissible: false
                    }
                ]
            });
            notyf.open({
                type: 'error',
                message: 'This action is not allowed.'
            });
        });

        document.getElementById('notifyBottomLeft').addEventListener('click', function (){
            const notyf = new Notyf({
                position: {
                    x: 'left',
                    y: 'bottom',
                },
                types: [
                    {
                        type: 'warning',
                        background: '#F5B759',
                        icon: {
                            className: 'fas fa-exclamation-triangle',
                            tagName: 'span',
                            color: '#fff'
                        },
                        dismissible: false
                    }
                ]
            });
            notyf.open({
                type: 'warning',
                message: 'This might be dangerous.'
            });
        });

        document.getElementById('notifyBottomRight').addEventListener('click', function (){
            const notyf = new Notyf({
                position: {
                    x: 'right',
                    y: 'bottom',
                },
                types: [
                    {
                        type: 'info',
                        background: '#262B40',
                        icon: {
                            className: 'fas fa-comment-dots',
                            tagName: 'span',
                            color: '#fff'
                        },
                        dismissible: false
                    }
                ]
            });
            notyf.open({
                type: 'info',
                message: 'John Garreth: Are you ready for the presentation?'
            });
        });

    </script>
    
</body>

</html>
