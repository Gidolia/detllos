<?php
include('database_connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="images/l1.jpg" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  
</head>

<body>

  <?php
  include('include/header.php');
  ?>

  <section id="hero-static" class="hero-static d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <h2>Welcome to <span>Detellos</span></h2>
      <!--<p>Lets Connect </p>-->
      
    </div>
  </section>

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Let's Connect</h2>
          <p><h3>Are you ready to begin your cloud journey? </h3><br>We'll find a solution for whatever your problem is. Get in touch with our professionals to find out how we can assist you in utilizing google cloud technology to advance your company..</p>
        </div>

      </div>


      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-6">

            <div class="info">
              <h3>Get in touch</h3>
              <!--<p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>-->

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>For Sales Contact us at:</h4>
                  <p>sales@detellos@gmail.com</p>
                </div>
              </div>
              <!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>For Support Contact us at:</h4>
                  <p>support@detellos@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>For any other queries contact us:</h4>
                  <p>info@detellos@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

            </div><br><br><br><br>
            <div class="info">
              <img src="images/0.png" style="width:100%;">
            </div>

          </div>
          

          <div class="col-lg-6">
            <form  method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                    <span>First Name*</span>
                  <input type="text" name="f_name" class="form-control" id="name" placeholder="First Name" required>
                </div>
                <div class="col-md-6 form-group">
                    <span>Last Name *</span>
                  <input type="text" name="l_name" class="form-control" id="name" placeholder="Last Name" required>
                </div>
                <!--<div class="col-md-6 form-group mt-3 mt-md-0">-->
                <!--  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>-->
                <!--</div>-->
              </div>
              <div class="form-group mt-3">
                  <span>Company Name *</span>
                <input type="text" class="form-control" name="c_name" id="subject" placeholder="Company Name" required>
              </div>
              <div class="form-group mt-3">
                  <span>Email Address *</span>
                <input type="email" class="form-control" name="e_id" id="subject" placeholder="Buisness Email Address" required>
              </div>
              <div class="form-group mt-3">
                  <span>Phone Number*</span>
                <input type="text" class="form-control" name="phone" id="subject" placeholder="Phone No. With Country Code" required>
              </div>
              <div class="form-group mt-3">
                  <span>Job Title *</span>
                <input type="text" class="form-control" name="j_title" id="subject" placeholder="Job Title" required>
              </div>
              <div class="form-group mt-3">
                  <span>Services you looking for</span>
                <select class="form-control"  name="service">
                    <option>Please Select One*</option>
                    <option value="Google Workspace">Google Workspace</option>
                    <option value="Google Cloud Platform">Google Cloud Platform</option>
                    <option value="Google Assesment">Google Assesment</option>
                    <option value="Other">Other</option>
                </select>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="comment" placeholder="Comments" required></textarea>
              </div>
             
              <div class="text-center"><button type="submit" name="btn">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->
          

        </div>

      </div>
    </section><!-- End Contact Section -->
<?php
if(isset($_POST['btn'])){
    $qry="INSERT INTO `contact`(`c_id`, `f_name`, `l_name`, `company_name`, `email`, `phone`, `job_title`, `service`, `comment`, `r_date`, `r_time`) VALUES ('Null','$_POST[f_name]','$_POST[l_name]','$_POST[c_name]','$_POST[e_id]','$_POST[phone]','$_POST[j_title]','$_POST[service]','$_POST[comment]','$date','$time')";
    $rs=$con->query($qry);
    if($rs==TRUE){
        echo "<script>alert('Thanks for Contacting us ! Our team will let you soon.');location.href='contact.php';</script>";
    }else{
        
    }
}




?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>HeroBiz</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>HeroBiz</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!--<script src="assets/vendor/php-email-form/validate.js"></script>-->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>