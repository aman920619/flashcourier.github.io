<?php
  include 'connection.php';
  session_start();
  
  
  if(!isset($_SESSION['id'])||(trim($_SESSION['id']==''))){
      header('Location:login.php');
      exit(); 
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Flash Courier</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="customerUI.php">Flash<span>Courier</span></a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="active"><a href="customerUI.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="logout.php">Sign-out</a></li>
          
          <li><a href="profile.php">Profile</a></li>
        </ul>
      </nav>

      <a href="#about" class="get-started-btn scrollto">Get Started</a>
     

    </div>
  </header>
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
    </div>
  </section>
  <main id="main">
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>About Flash Courier</h3>
            <p class="font-italic">
              Our motto is to provide you fast and safe delivery.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> We are trying to provide delivery in this Covid-19 pandemic.</li>
              <li><i class="ri-check-double-line"></i> We ensure that all product is packed and shipped safely.</li>
            </ul>
            <p>
                <b>Note-</b>There might be a slight delay in your consignment due to Covid-19 pandemic.
            </p>
          </div>
        </div>

      </div>
    </section>
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-box"></i></div>
              <h4><a href="addparcel_cust.php">Book Parcel</a></h4>
              <p>Book your parcel</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-search-alt"></i></div>
              <h4><a href="trackcust.php">Track Parcel</a></h4>
              <p>Check the current status of your parcel</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.432830283747!2d75.84987151493314!3d22.63764538514945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjLCsDM4JzE1LjUiTiA3NcKwNTEnMDcuNCJF!5e0!3m2!1sen!2sin!4v1622041228091!5m2!1sen!2sin" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Kailod Kartal, Indore-Dewas By-Pass, Road, Indore, 452020</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>flashcouriersage@gmail.com</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

              <form action="javascript:sendmail()" method="post" role="form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                  <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              
                  <div class="text-center" ><button class="btn-warning" type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>

  </main>
  <div class="copyright">
    Project&copy;2021<strong><span>Flash Courier</span></strong> CMS
      </div>

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>
  <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
 
<script>  

     function sendmail(){
    
			var name = $('#name').val();
			var email = $('#email').val();
			var subject = $('#subject').val();
                       var message = $('#message').val();

			// var body = $('#body').val();

			var Body='Name: '+name+'<br>Email: '+email+'<br>Subject: '+subject+'<br>Message: '+message;
			//console.log(name, phone, email, message);

			Email.send({
        SecureToken:"83e3bd37-103b-4536-b1c4-e8ed0ad73de0",
				To: 'flashcouriersage@gmail.com',
				From: "flashcouriersage@gmail.com",
				Subject: "New message on contact from:"+name,
				Body: Body
			}).then(
				message =>{
					//console.log (message);
					if(message=='OK'){
					alert('Thank you for contacting us. We will try to reach you soon.');
					}
					else{
						console.error (message);
						alert('There is error at sending message. ')
						
					}

				}
			);



		}


    </script>
 </script>
</body>
</html>