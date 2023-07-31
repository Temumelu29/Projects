<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
<?php 
include "config.php";

	if (isset($_POST['submit'])) {

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$date = $_POST['date'];
		$phone = $_POST['phone'];
        $photogragh = $_POST['photogragh'];
        $service = $_POST['service'];


		$sql = "INSERT INTO `applieduser`(`firstname`, `lastname`, `email`, `phone`, `date`,`photograph`,`service`) VALUES ('$firstname','$lastname','$email','$phone','$date','$photograph','$service')";
    $sql = "INSERT INTO `request`(`firstname`, `lastname`, `date`,`service`) VALUES ('$firstname','$lastname','$date','$service')";

		$result = $conn->query($sql);

		if ($result == TRUE) {
      echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
    }else{
        echo "<script>alert('Unknown error occured.')</script>";
    }

	}
?>

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Application for identification card</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
               
                <p>Applicants submit their applications and documents in person. Opportunities to apply online or by mail are rare, and are typically restricted to special circumstances </p>
              </div>


              
            </div>

          </div>


          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                                    <form action="" method="post" role="form" >
 <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Full Name</label>
                  <input type="text" name="firstname" class="form-control" id="name" required>
                </div><br><br>

                  <div class="form-group col-md-6">
                  <label for="name">Last Name</label>
                  <input type="text" class="form-control" name="lastname" id="lastname" required>
                </div><br><br><br>

                <div class="form-group col-md-6">
                  <label for="name">phone number</label>
                  <input type="text" class="form-control" name="phone" id="email" required>
                </div><br><br>

                     <div class="form-group col-md-6">
                     <label >Services</label>
                      <select class="form-select mb-0" name="service" aria-label="Gender select example">
                      <option value="id">Identification card</option>
                                                    <option value="birth">Birth Certificate</option>
                                                    <option value="birth">Marriage Certificate</option>
                                                    <option value="birth">clearance of residence</option>
                                                </select>
<br>
    </div>
              </div>
              <div class="form-group">
                <label for="name">Email</label>
                <input type="email" class="form-control" name="email" id="subject" required>
              </div>
 <br>
                 <div class="form-group col-md-6">
                  <label for="name">Appointment date</label>
                  <input type="date" class="form-control" name="date" id="email" required>
                </div>
<br>
                 <div class="form-group col-md-6">
                  <label for="name">photograph</label>
                  <input type="file" class="form-control" name="photo" id="email" required>
                </div>
<br>



<br>

       


               
              <div class="text-center">
<button name ="submit" type="submit">Submit</button></div>
</form>
            <a href="home.php" >Home</a> 
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
