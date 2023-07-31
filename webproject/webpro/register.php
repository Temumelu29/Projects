<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

		$username = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$idnum = $_POST['idnum'];
		$username = $_POST['username'];
		$phone = $_POST['phone'];
        $photogragh = $_POST['photogragh'];
        $service = $_POST['service'];


		$sql = "INSERT INTO `applieduser`(`firstname`, `lastname`, `email`, `phone`, `date`,`photograph`,`service`) VALUES ('$username','$lastname','$email','$phone','$date','$photograph','$service')";

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

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
                  <label for="name"></label>
                  <input type="text" class="form-control" name="phone" id="email" required>
                </div><br><br>

                     <div class="form-group col-md-6">
                     <label >Services</label>
                      <select class="form-select mb-0" name="Gender" aria-label="Gender select example">
                                      
                                                    <option value="Female">Female</option>
                                                    <option value="Male">birth</option>
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
                  <label for="name"> password</label>
                  <input type="password" class="form-control" name="password"  required>
                </div>
<br>

       


               
              <div class="text-center">
<button name ="submit" type="submit">Submit</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>

  </main>
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