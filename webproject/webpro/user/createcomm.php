<?php 
include "config.php";

	if (isset($_POST['submit'])) {
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$title = $_POST['title'];
		$message = $_POST['message'];


		$sql = "INSERT INTO `comment`(`fullname`, `email`, `title`, `message`) VALUES ('$fullname','$email','$title','$message')";

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New comment recorded successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}



?>

<!DOCTYPE html>
<html>
<body>

<form action="" method="POST">
  <fieldset>
    <legend>Comment:</legend>
    Full name:<br>
    <input type="text" name="fullname">
    <br>
     
    Email:<br>
    <input type="email" name="email">
    <br>
    title:<br>
    <input type="title" name="title">
    <br>
    content:<br>
    <input type="content" name="message">
    <br>
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>

</body>
</html>