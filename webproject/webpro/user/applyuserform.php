<?php 
include "config.php";

	if (isset($_POST['submit'])) {
		// get variables from the form
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		$service = $_POST['service'];
		$date = $_POST['date'];
		$email = $_POST['email'];
        $phone = $_POST['phone'];

		$sql = "INSERT INTO `applieduser`(`firstname`, `lastname`, `service`, `date`, `email`,`phone`) VALUES ('$first_name','$last_name','$service','$date','$email','$phone')";

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}



?>

<!DOCTYPE html>
<html>
<body>

<h2>schedule user form</h2>

<form action="" method="POST">
  <fieldset>
    <legend>Personal information:</legend>
    First name:<br>
    <input type="text" name="firstname">
    <br>
    Last name:<br>
    <input type="text" name="lastname">
    <br>

 <br>
    Service:<br>
    <input type="text" name="service">
    <br>

 <br>
    Date:<br>
    <input type="date" name="date">
    <br>

 <br>
    Email:<br>
    <input type="email" name="email">
    <br>


    phone:<br>
    <input type="integer" name="phone">
    <br>




    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>

</body>
</html>
