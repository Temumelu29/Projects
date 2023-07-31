<?php
    include('functions.php');
    $id = $_GET['id'];
    $query = "select * from `request` where `id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $service = $row['service'];
            $date = $row['date'];
            $query = "INSERT INTO `accepted` (`id`, `firstname`, `lastname`, `service`, `date`) VALUES (NULL, '$firstname', '$lastname', '$service', '$date');";
        }
        $query .= "DELETE FROM `request` WHERE `request`.`id` = '$id';";
        if(performQuery($query)){
            echo "Account has been accepted.";
        }else{
            echo "Unknown error occured. Please try again.";
        }
    }else{
        echo "Error occured.";
    }
    
?>
<br/><br/>
<a href="home.php">Back</a>
