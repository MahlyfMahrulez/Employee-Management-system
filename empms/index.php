<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Employee Management System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton:wght@400;700&display=swap" rel="stylesheet">

    <style>
      /* Navbar */
      .navbar {
        position: absolute;
        width: 100%;
        background: rgba(33, 32, 32, 0.91);
        z-index: 10;
        border-radius:10px;
      }

      /* Banner */
      .banner-container {
        position: relative;
      }

      .overlay-content {
        top: 50%;
        left: 50%;
        color: white;
      }

      .overlay-content h1 {
    font-family: 'Anton', sans-serif;
    font-weight: 400; /* You can adjust this based on the available weights */
    font-size:60px;
    color:yellow;
}


      /* About Us Section */
      .about-container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 50px;
        background: #f4f4f4;
      }

      .about-text {
        flex: 1;
        padding: 20px;
        max-width: 600px;
      }

      .about-text h2 {
        font-size: 2.5em;
        color: #333;
        margin-bottom: 15px;
      }

      .about-text p {
        font-size: 1.2em;
        color: #555;
        line-height: 1.6;
      }

      .about-image {
        flex: 1;
        text-align: center;
      }

      .about-image img {
        max-width: 100%;
        height: auto;
      }

      /* Contact Us Section */
      .contact-section {
        padding: 50px;
        background: #222;
        color: white;
        text-align: center;
      }

      .contact-section h2 {
        font-size: 2.5em;
        margin-bottom: 15px;
      }

      .contact-info {
        font-size: 1.2em;
        line-height: 1.8;
      }

      .contact-info i {
        margin-right: 10px;
        color: #f8b400;
      }

      .contact-info a{
        color:white;
      }

      .navbar-nav .nav-item .nav-link:hover {
        color: red !important;
      }

      .navbar-nav .nav-item .nav-link {
        color:yellow;
        font-size:20px;
      }

      .img{
        border-radius:10px;
      }
      .services-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 50px;
        background: #fff;
      }

      .service {
        flex: 1;
        max-width: 30%;
        text-align: center;
        padding: 20px;
      }

      .service img {
  width: 100%; /* Ensures the image fills its container */
  height: 250px; /* Set a fixed height */
  object-fit: cover; /* Ensures the image covers the area without distortion */
  border-radius: 10px;
}

.service img:hover {
        transform: scale(1.1);
      }
      .service h3 {
        font-size: 1.8em;
        color: #333;
        margin-top: 15px;
      }

      .service p {
        font-size: 1.1em;
        color: #555;
      }

      html {
  scroll-behavior: smooth;
}


    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <img class="img" src="img/logo1.jpg" height="40px" width="80px"><a class="navbar-brand" href="#"></a>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="emp/">Employee</a></li>
          <li class="nav-item"><a class="nav-link" href="admin/">Admin</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>

    <main>
      <div class="banner-container">
        <img src="img/banner2.avif" alt="Banner" class="banner-img" style="width:100%; height:auto;">
        <div class="overlay-content">
          <h1>Primes Engineering's Employee Management System</h1>
        </div>
      </div>
    </main>



    <!-- Services Section -->
    <section class="services-container" id="services">
      <div class="service">
        <img src="img/engine_building.jpg" alt="Engine Building">
        <h3>Engine Building</h3>
        <p>We specialize in designing and assembling high-performance engines tailored to your needs.</p>
      </div>
      <div class="service">
        <img src="img/engine_transport.jpg" alt="Engine Transportation">
        <h3>Engine Transportation</h3>
        <p>Our efficient logistics services ensure safe and timely engine transportation.</p>
      </div>
      <div class="service">
        <img src="img/engine_repair.jpg" alt="Engine Repair">
        <h3>Engine Repair</h3>
        <p>We provide expert repair services to keep your engines running smoothly.</p>
      </div>
    </section>

    <!-- About Us Section -->
    <section class="about-container" id="about">
      <div class="about-text">
        <h2><u>About Us</u></h2>
        <p>Welcome to Primes Engineering's Employee Management System, a powerful solution designed to manage employees efficiently. 
          Our system ensures smooth operations, secure data management, and a user-friendly experience for both employees and administrators.</p>
        <p>Our goal is to help businesses streamline their workforce management, reduce manual effort, and enhance overall productivity.</p>
      </div>
      <div class="about-image">
        <img src="img/aboutus.jpg" alt="About Us">
      </div>
    </section>

    <!-- Contact Us Section -->
    <section class="contact-section" id="contact">
      <h2>Contact Us</h2>
      <p class="contact-info">
        <i class="fa fa-map-marker"></i> prime engineering's, Hosapete,Karnataka <br>
        <i class="fa fa-envelope"></i> support@primesengineering.com <br>
        <i class="fa fa-phone"></i> +91 8197220314  <br>
        <a href="index.php"><i class="fa fa-globe"></i> www.primesengineering.com</a>
      </p>
      <p>© 2025 Primes Engineering. All rights reserved.</p>
      
    </section>
    <!-- Essential JavaScript -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The JavaScript plugin to display page loading on top -->
    <script src="js/plugins/pace.min.js"></script>
  </body>
</html>
