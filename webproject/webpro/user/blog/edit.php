<?php session_start(); ?>
<?php

    include "logic.php";

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <h3 class="navbar-brand text-white">Multi-Login System</h3>
    <div class="mr-auto"></div>
    <ul class="navbar-nav">
                  <li class="nav-item">
            <a href="#" class="nav-link"> </li>
          <li class="nav-item">
            <a href="../index.php" class="nav-link">Logout</a>
        </li>
</ul></nav>


   <div class="wrapper">
        <nav id="sidebar">
            <ul class="list-unstyled components">
                <p>Dummy Heading</p>
                <li>
                    <a href="../registerd.php" >Home</a>
                   
                </li>
                <li>
                    <a href="../registerduser.php">Registerd User</a>
                 </li>
                <li>
                    <a href="../Applieduser.php" >Applied User</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                       
                    </ul>
                </li>
                <li >
                    <a href="create.php">blog</a>
                </li>
                 <ul>
                 
                  <li class="active"><a href="edit.php">Edit</a></li>
 <li><a href="create.php">Add</a></li>
                  
                
            </ul>

 <li >
                    <a href="messages.php">viewcomment</a>
                 </li>

        </nav>

        </nav>









   <div class="container mt-5">
        <?php foreach($query as $q){ ?>
            <form method="POST">
                <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                Title: &nbsp;&nbsp;<input type="text" placeholder="Blog Title" class="textA"  cols="1" rows="1" name="title" value="<?php echo $q['title']?>"><br><br><br>
                <textarea name="content" class="textA" cols="30" rows="5"><?php echo $q['content']?></textarea>
                <button class="btn btn-dark" name="update">Update</button>
            </form>
        <?php } ?>    
   </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>































<style>

.textA{
 background-color:#dedede;
 


}



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
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


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
    background: #ededed;
}

</style>



