<?php
    ini_set("display_errors", "off");
    $conn = mysqli_connect("localhost", "root", "", "webproject");

    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    $sql = "SELECT * FROM comment";
    $query = mysqli_query($conn, $sql);

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM comment WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }
?>