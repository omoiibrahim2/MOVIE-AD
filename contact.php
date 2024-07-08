<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Photography Bootstrap Template - Contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">

        <i class="bi bi-camera"></i>
        <h1>Photography</h1>
      </a>

      <?php include_once("template/nav.php"); ?>
      <?php require_once("includes/db2_connect.php"); ?>
      <?php
     if(isset($_POST["send_message"])){
      $email = mysqli_real_escape_string($conn, $_POST["email"]);
      $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
      $message = mysqli_real_escape_string($conn, $_POST["message"]);
  
      $insert_message = "INSERT INTO users (email, subject, message) VALUES ('$email', '$subject', '$message')";
  
      if ($conn->query($insert_message) === TRUE) {
          header("Location: View_Messages.php");
          exit();
      } else {
          echo "Error: " . $insert_message . "<br>" . $conn->error;
      }
  }
      ?>
      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>




  <div class="page-header d-flex align-items-center">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Get in touch</h2>
          <p>We provide 24 hrs service</p>

        </div>
      </div>
    </div>
  </div>


  <section id="contact" class="contact">
    <div class="container">

      <div class="row gy-4 justify-content-center">

        <div class="col-lg-3">
          <div class="info-item d-flex">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h4>Location:</h4>
              <p>Nairobi,Kenya</p>
            </div>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3">
          <div class="info-item d-flex">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h4>Email:</h4>
              <p>omoiibrahim@gmail.com</p>
            </div>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3">
          <div class="info-item d-flex">
            <i class="bi bi-phone flex-shrink-0"></i>
            <div>
              <h4>Call;</h4>
              <p>+254719651114</p>
            </div>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="row justify-content-center mt-4">

        <div class="col-lg-9">
          <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label for="fn">Fullname:</label><br>
            <input type="text" id="fn" placeholder="fullname" name="fullname" required><br><br>

            <label for="em">Email Address:</label><br>
            <input type="email" id="em" placeholder="Email Address" name="email" required><br><br>

            <label for="sb">Subject:</label><br>
            <select name="subject" id="sb" required>
              <option value="">--Select Subject--</option>
              <option value="Portrait Photography">Portrait Photography</option>
              <option value="Sports Photography">Sports Photography</option>
              <option value="Wedding Photography">Wedding Photography</option>
            </select><br><br>

            <label for="sb">Message:</label><br>
            <textarea name="message" id="" cols="30" rows="5" required></textarea><br><br>

            <input type="submit" name="send_message" value="Send Message">
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->

  </main><!-- End #main -->


  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Photography</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by <a href="https://mail.google.com/mail/u/0/">omoiibrahim</a>
      </div>
    </div>
  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>