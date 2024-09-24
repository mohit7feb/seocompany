<!doctype html>
<html lang="en-US">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css" type="text/css" />

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.2.0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <title>The Seo Company</title>
  </head>

  <body>

  <!-- N A V B A R -->
  <nav class="navbar navbar-default navbar-expand-lg fixed-top custom-navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon ion-md-menu"></span>
    </button>
    <img src="images/logo.png" class="img-fluid nav-logo-mobile" alt="Company Logo">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <div class="container">
      	<img src="images/logo.png" class="img-fluid nav-logo-desktop" alt="Company Logo">
        <ul class="navbar-nav ml-auto nav-right" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
          <li class="nav-item nav-custom-link">
            <a class="nav-link" href="index.php">Home <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li>
          <li class="nav-item nav-custom-link">
            <a class="nav-link" href="about.php">About Us <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li>
          <li class="nav-item nav-custom-link">
            <a class="nav-link" href="index.php#marketing">Features <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li>
          <li class="nav-item nav-custom-link">
            <a class="nav-link" href="index.php#testimonials">Testimonials <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li>
         
          <li class="nav-item nav-custom-link">
            <a class="nav-link" href="index.php#pricing">Pricing <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li>
          <li class="nav-item nav-custom-link">
            <a class="nav-link" href="contact.php">Contact Us <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li>
          <!-- <li class="nav-item nav-custom-link btn btn-demo-small">
            <a class="nav-link" href="#">Try for Free <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
  <!-- E N D  N A V B A R -->
  
 



  <!-- P R I C I N G -->
   <br>
  <section id="contact-us" style="padding: 50px 0; background-color: #f9f9f9;">
  <div class="container">
    <div class="title-block text-center">
      <h2 style="font-size: 36px; font-weight: 600; color: #333;">Contact Us</h2>
      <p style="font-size: 18px; color: #666; max-width: 700px; margin: 0 auto;">If you have any questions or inquiries about our digital marketing services, feel free to reach out to us. Simply fill out the form below, and we’ll get back to you as soon as possible.</p>
    </div>
    <div class="row justify-content-center" style="margin-top: 40px;">
      <div class="col-md-8">
        <div class="contact-box p-4 shadow-sm" style="background-color: #fff; border-radius: 8px;">
          <form id="contact-form">
            <div class="form-group mb-4">
              <label for="name" style="font-weight: 600; color: #333;">Full Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your full name" required style="border-radius: 5px; padding: 12px; font-size: 16px;">
            </div>
            <div class="form-group mb-4">
              <label for="email" style="font-weight: 600; color: #333;">Email Address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email" required style="border-radius: 5px; padding: 12px; font-size: 16px;">
            </div>
            <div class="form-group mb-4">
              <label for="message" style="font-weight: 600; color: #333;">Your Message</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" required style="border-radius: 5px; padding: 12px; font-size: 16px;"></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary" style="padding: 12px 30px; font-size: 16px; border-radius: 5px;">Submit</button>
            </div>
          </form>
          <div id="success-message" style="display:none; margin-top: 20px;" class="alert alert-success text-center">
            Message sent successfully!
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('contact-form').addEventListener('submit', function(e) {
      e.preventDefault(); // Prevent actual form submission
      document.getElementById('success-message').style.display = 'block'; // Show success message
    });
  </script>
</section>



  <!-- E N D  P R I C I N G -->

  <!-- C A L L  T O  A C T I O N -->
  <section id="call-to-action">
    <div class="container text-center">
      <h2>Increase your conversion rates now</h2>
      <div class="title-block">
        <p>Learn how to increase both your online and offline conversion rates and boost your sales and profits.</p>
        <!-- <a href="#" class="btn btn-regular">Get Started</a> -->
      </div>
    </div>
  </section>
  <!-- E N D  C A L L  T O  A C T I O N -->

  <!--  F O O T E R  -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5>Seo Ranking</h5>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">Features</a></li>
            <li><a href="testimonials">Testimonials</a></li>
            <li><a href="index.php">Pricing</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="policy.php">Privacy Policy</a></li>
            <!-- <li><a href="#">Video Tutorials</a></li> -->
          </ul>
        </div>
        <div class="col-md-3" style="visibility: hidden;">
          <h5>Main Tools</h5>
          <ul>
            <li><a href="#">Rank Tracker</a></li>
            <li><a href="#">Backlink Checker</a></li>
            <li><a href="#">Keyword Generator</a></li>
            <li><a href="#">Serp Checker</a></li>
            <li><a href="#">Site Audit</a></li>
          </ul>
        </div>
        <div class="col-md-3" style="visibility: hidden;">
          <h5>Blog</h5>
          <ul>
            <li><a href="#">Get High Quality Backlinks</a></li>
            <li><a href="#">Top Google Searches</a></li>
            <li><a href="#">Avoid Google Penalties</a></li>
            <li><a href="#">White Hat SEO Tips</a></li>
            <li><a href="#">Google Trends</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Our Company</h5>
          <p>We are a leading digital marketing agency providing cutting-edge solutions to help businesses grow online. From SEO to content strategy, we’ve got you covered.</p>
          <p><a href="mailto:support@digitalmarketingsolutions.com" class="external-links">support@digitalmarketingsolutions.com</a></p>
          <!-- <p>Phone: <a href="tel:+1234567890" class="external-links">+1 234 567 890</a></p> -->
        </div>
      </div> 
      <div class="divider"></div>
      <div class="row">
        <!-- <div class="col-md-6 col-xs-12">
            <a href="#"><i class="icon ion-logo-facebook"></i></a>
            <a href="#"><i class="icon ion-logo-instagram"></i></a>
            <a href="#"><i class="icon ion-logo-twitter"></i></a>
            <a href="#"><i class="icon ion-logo-youtube"></i></a>
          </div> -->
          <div class="col-md-6 col-xs-12" style="margin-left: 110px;">
            <small>2024 &copy; All rights reserved. Made by <a href="index.php" target="blank" class="external-links">The SEO Company</a></small>
          </div>
      </div>
    </div>
  </footer>
  <!--  E N D  F O O T E R  -->
    

    <!-- External JavaScripts -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>