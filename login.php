<?php

if(isset($_POST['save']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wallpaper";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO login (email, password) VALUES ('$email', '$password')";

    if ($conn->query($sql) === true) {
        echo "Record inserted successfully";
        header("Location: afterindex.html");
        exit; // Ensure that you exit after the redirect
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
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

  <!--  CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>
<style>
#main {
  border-radius: 5px;
  background-color:#454141;
  color:white;
  padding: 20px;
  width:25%;
  margin-left:40%;
  margin-top:10%;
}
input[type=Email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width:100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
h2{
text-align:center;
}
p{
text-align:center;
}
.footer {
  margin-top: 30px;
  padding: 30px 0;
  font-size: 14px;
  border-top: 1px solid rgba(255, 255, 255, 0.15);
  background-color:black;
  color:white;
}
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

  <center>

<div class="container" id="main">
<h2>Login</h2>
<form method="POST">
<input type="Email" id="Email" name="email" placeholder="Enter Your Email.."><br>
 <input type="password" id="enter password" name="password" placeholder="enter your password">
 
<button type="save" name="save" class="btn btn-primary">Login</button>
 <p> Don't have an account?<a href="signup.php">Signup</a></p>

 
</div>
</form>


</center>
  
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