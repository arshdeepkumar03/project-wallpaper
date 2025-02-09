<?php

if(isset($_POST['save']))
{
	
$name=$_POST['name'];

$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$msg=$_POST['msg'];

$servername="localhost";
$username="root";
$password="";
$dbname="wallpaper";
$conn=new mysqli($servername,$username,$password,$dbname);



if($conn->connect_error)
{
	die("connection failed".$conn->connect_error);
}


$sql="insert into contactus(name,email,phone,subject,msg)values('$name','$email','$phone','$subject','$msg')";
if($conn->query($sql)==True)
{
	?><h3 class="msg"><?php echo "Record inserted successfully";
	
	?></h3><?php
	header("Location: index.html");
	
}
else
{
	?><h3 class="msg"><?php echo "Error".$sql."<br/>".$conn->error;?></h3><?php
}
$conn->close();
}

?>


<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Contact</title>
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

  <!--  Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

 
</head>
<style>
.form-group mt-3{
color:white;}
</style>

<body>

 
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
        <img src="jj.jpg" alt=""> 
        
        <h1>4K Wallpapers</h1>
      </a>

        <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="about.html">About</a></li>
       
              <li><a href="contact.php" class="">Contact</a></li>
       <ul>
              <li><a href="signup.php">Signup</a></li>
              <li><a href="login.php">Login</a></li>
            
            </ul>
                 
        </ul>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/anime_wallpapers0976/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://youtube.com/@animeshorts5019" class="youtube"><i class="bi bi-youtube"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Contact</h2>
            <p>Join us on this captivating journey through the realm of anime, 
			and let our wallpapers ignite your passion for this extraordinary art form.
			Welcome to our 4K Wallpapers Website, where the beauty of Wallpapers comes to life!</p>
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
                <p>Jalandhar punjab</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>AnimeWallpapers12@gmail.com</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>+91 0876543210</p>
              </div>
            </div>
          </div>

        </div>

        <div class="row justify-content-center mt-4">

          <div class="col-lg-9">
         <form method="POST">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"  required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="msg" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="save">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>

  </main>

  
  <footer id="footer" class="footer">
<div class="container">
    
	<div class="row">
	<div class="col-xl-3">
      <div class="logo">
       <img src="jj.jpg" alt="" height="100px"> 
      </div>
	  </div>
	  <div class="col-xl-2">
      <div class="about">
	 <center> <h5>About US</h5>
         <a href="homepage.html" class="active">Home</a><br>
          <a href="about.html">About</a><br>
          <a href="#">Gallery</a></center>
      </div>
	  </div>
	  <div class="col-xl-2">
      
       <center><h5>Contact Us</h5>
	   <h5><a href="contact.html">Contact</a></h5>
	  
        Designed by <p>Arshdeep</p></center>
      
    </div>
	<div class="col-xl-2">
      
       <center><h5>Gallery</h5>
        <a href="nature.html">Nature</a><br>
         <a href="anime.html">Anime</a><br>
        <a href="dark.html">Dark</a>
           </center>   
      
    </div>
	<div class="col-xl-3">
       <div class="header-social-links">
	  <center> <h5>Follow Us </h5>
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/anime_wallpapers0976/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://youtube.com/@animeshorts5019" class="youtube"><i class="bi bi-youtube"></i></i></a>
		</center>
      </div>
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

  <!--  Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>